<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class reCAPTCHA implements ValidationRule
{
    /**
     * Run the validation rule.
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        // Check if response is empty
        if (empty($value)) {
            Log::warning('reCAPTCHA: Empty response received', [
                'ip' => request()->ip(),
                'user_agent' => request()->userAgent()
            ]);
            $fail('Please complete the reCAPTCHA verification.');
            return;
        }

        try {
            // Use POST request with IP address
            $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
                'secret' => env('RECAPTCHA_SECRET_KEY'),
                'response' => $value,
                'remoteip' => request()->ip()
            ]);

            $result = $response->json();

            // Log for debugging
            Log::info('reCAPTCHA v3 verification attempt', [
                'ip' => request()->ip(),
                'success' => $result['success'] ?? false,
                'score' => $result['score'] ?? null,
                'action' => $result['action'] ?? null,
                'error_codes' => $result['error-codes'] ?? [],
                'user_agent' => request()->userAgent()
            ]);

            // Check if verification failed
            if (!($result['success'] ?? false)) {
                $errorCodes = $result['error-codes'] ?? [];
                Log::warning('reCAPTCHA verification failed', [
                    'error_codes' => $errorCodes,
                    'ip' => request()->ip()
                ]);

                $fail('reCAPTCHA verification failed. Please try again.');
                return;
            }

            // For reCAPTCHA v3, check score (0.0 = bot, 1.0 = human)
            $score = $result['score'] ?? 0;

            // Smart threshold untuk Company Profile Hanara.id
            $minScore = $this->getCompanyProfileThreshold();

            if ($score < $minScore) {
                Log::warning('reCAPTCHA v3 low score detected - possible bot', [
                    'score' => $score,
                    'min_score' => $minScore,
                    'threshold_type' => 'company_profile_dynamic',
                    'ip' => request()->ip(),
                    'user_agent' => request()->userAgent(),
                    'time_context' => [
                        'hour' => now()->hour,
                        'is_weekend' => now()->isWeekend(),
                        'timezone' => 'Asia/Jakarta'
                    ]
                ]);
                $fail('Security verification failed. Please try again.');
                return;
            }

            // Check action (optional but recommended for v3)
            if (isset($result['action']) && $result['action'] !== 'contact_form') {
                Log::warning('reCAPTCHA v3 wrong action', [
                    'expected' => 'contact_form',
                    'received' => $result['action'],
                    'ip' => request()->ip()
                ]);
            }

            // Log successful verification
            Log::info('reCAPTCHA v3 verification successful', [
                'score' => $score,
                'threshold_used' => $minScore,
                'ip' => request()->ip()
            ]);
        } catch (\Exception $e) {
            Log::error('reCAPTCHA verification error', [
                'error' => $e->getMessage(),
                'file' => $e->getFile(),
                'line' => $e->getLine(),
                'ip' => request()->ip()
            ]);
            $fail('reCAPTCHA verification failed due to server error. Please try again.');
        }
    }

    /**
     * Smart threshold untuk Company Profile Hanara.id
     */
    private function getCompanyProfileThreshold(): float
    {
        $hour = now()->setTimezone('Asia/Jakarta')->hour;
        $isWeekend = now()->isWeekend();

        // Business hours: lebih permissive (jam kerja Indonesia)
        if (!$isWeekend && $hour >= 9 && $hour <= 17) {
            return 0.4;
        }

        // After hours weekdays: moderate
        if (!$isWeekend) {
            return 0.5;
        }

        // Weekend: lebih strict (bot activity biasanya tinggi)
        return 0.6;
    }
}

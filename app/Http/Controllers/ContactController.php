<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use App\Rules\reCAPTCHA;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        // Log incoming request for debugging
        Log::info('Contact form submission attempt', [
            'ip' => $request->ip(),
            'user_agent' => $request->userAgent(),
            'has_recaptcha' => !empty($request->input('g-recaptcha-response')),
            'recaptcha_length' => strlen($request->input('g-recaptcha-response', ''))
        ]);

        // Validasi sesuai dengan field di form
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'company' => 'nullable|string|max:255',
            'address' => 'nullable|string|max:500',
            'whatsapp' => 'nullable|string|max:20',
            'preferred_time' => 'required|in:Pagi,Siang,Sore',
            'message' => 'required|string|min:10|max:5000',
            'g-recaptcha-response' => ['required', new reCAPTCHA()],
        ], [
            'name.required' => 'Nama harus diisi',
            'email.required' => 'Email harus diisi',
            'email.email' => 'Format email tidak valid',
            'preferred_time.required' => 'Waktu yang diinginkan harus dipilih',
            'message.required' => 'Informasi kebutuhan harus diisi',
            'message.min' => 'Informasi kebutuhan minimal 10 karakter',
            'g-recaptcha-response.required' => 'Silakan verifikasi reCAPTCHA',
        ]);

        try {
            // Log validated data (without sensitive info)
            Log::info('Contact form validation passed', [
                'email' => $validated['email'],
                'ip' => $request->ip()
            ]);

            // Kirim email
            Mail::to('info@hanara.id')->send(new ContactFormMail($validated));

            Log::info('Contact form email sent successfully', [
                'email' => $validated['email'],
                'ip' => $request->ip()
            ]);

            return redirect()->back()->with('success', 'Pesan berhasil dikirim, tim Kami akan segera menghubungi Anda');
        } catch (\Exception $e) {
            // Log error detail
            Log::error('Contact form submission error', [
                'message' => $e->getMessage(),
                'file' => $e->getFile(),
                'line' => $e->getLine(),
                'ip' => $request->ip(),
                'email' => $validated['email'] ?? 'unknown'
            ]);

            // Untuk development, tampilkan error detail
            if (config('app.debug')) {
                return redirect()->back()
                    ->withInput()
                    ->with('error', 'Error: ' . $e->getMessage());
            }

            // Untuk production
            return redirect()->back()
                ->withInput()
                ->with('error', 'Maaf, terjadi kesalahan saat mengirim pesan. Silakan coba lagi.');
        }
    }
}

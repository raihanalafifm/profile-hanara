<?php

namespace App\Http\Controllers;

use App\Mail\JobApplicationMail;
use App\Models\Career;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use App\Rules\reCAPTCHA;

class JobApplicationController extends Controller
{
    public function submit(Request $request)
    {
        // Log incoming request
        Log::info('Job application submission', $request->all());

        // Validasi sesuai dengan field di form job application
        $validated = $request->validate([
            'fullName' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phoneNumber' => 'required|string|max:20',
            'career_id' => 'required|exists:careers,id',
            'linkedin' => 'nullable|string|max:255',
            'g-recaptcha-response' => [new reCAPTCHA()],
        ], [
            'fullName.required' => 'Nama lengkap harus diisi',
            'email.required' => 'Email harus diisi',
            'email.email' => 'Format email tidak valid',
            'phoneNumber.required' => 'Nomor telepon harus diisi',
            'career_id.required' => 'Posisi karir harus dipilih',
            'career_id.exists' => 'Posisi karir tidak valid',
        ]);

        try {
            // Get career details
            $career = Career::findOrFail($validated['career_id']);

            // Add career information to validated data
            $validated['career_position'] = $career->position;

            // Log validated data
            Log::info('Job application validated data', $validated);

            // Kirim email ke HR (akan masuk ke Mailtrap)
            Mail::to('info@hanara.id')->send(new JobApplicationMail($validated));

            Log::info('Job application email sent successfully');

            // Jika berhasil, redirect dengan pesan sukses
            return redirect()->back()->with('job_success', 'Lamaran berhasil dikirim! Tim HR kami akan meninjau lamaran Anda dan menghubungi dalam 3-5 hari kerja.');
        } catch (\Exception $e) {
            // Log error detail
            Log::error('Job application error', [
                'message' => $e->getMessage(),
                'file' => $e->getFile(),
                'line' => $e->getLine(),
                'trace' => $e->getTraceAsString()
            ]);

            // Untuk development, tampilkan error detail
            if (config('app.debug')) {
                return redirect()->back()
                    ->withInput()
                    ->with('job_error', 'Error: ' . $e->getMessage());
            }

            // Untuk production
            return redirect()->back()
                ->withInput()
                ->with('job_error', 'Maaf, terjadi kesalahan saat mengirim lamaran. Silakan coba lagi atau hubungi tim HR kami langsung.');
        }
    }
}

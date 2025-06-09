<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        // Log incoming request
        Log::info('Contact form submission', $request->all());

        // Validasi sesuai dengan field di form Anda
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'company' => 'nullable|string|max:255',
            'address' => 'nullable|string|max:500',
            'whatsapp' => 'nullable|string|max:20',
            'preferred_time' => 'required|in:Pagi,Siang,Sore',
            'message' => 'required|string|min:10|max:5000',
        ], [
            'name.required' => 'Nama harus diisi',
            'email.required' => 'Email harus diisi',
            'email.email' => 'Format email tidak valid',
            'preferred_time.required' => 'Waktu yang diinginkan harus dipilih',
            'message.required' => 'Informasi kebutuhan harus diisi',
            'message.min' => 'Informasi kebutuhan minimal 10 karakter',
        ]);

        try {
            // Log validated data
            Log::info('Validated data', $validated);

            // Kirim email ke Gmail Anda (akan masuk ke Mailtrap)
            Mail::to('info@hanara.id')->send(new ContactFormMail($validated));

            Log::info('Email sent successfully');

            // Jika berhasil, redirect dengan pesan sukses
            return redirect()->back()->with('success', 'Pesan Anda telah berhasil dikirim. Kami akan segera menghubungi Anda.');
        } catch (\Exception $e) {
            // Log error detail
            Log::error('Contact form error', [
                'message' => $e->getMessage(),
                'file' => $e->getFile(),
                'line' => $e->getLine(),
                'trace' => $e->getTraceAsString()
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

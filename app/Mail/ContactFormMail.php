<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Address;

class ContactFormMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    public function __construct($data)
    {
        // PENTING: Ini yang harus diperbaiki!
        $this->data = $data;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Pesan Kontak Baru dari ' . ($this->data['name'] ?? 'Unknown'),
            from: new Address('raihann.almuyassarr@gmail.com', 'Profile Hanara'),
            replyTo: [
                new Address(
                    $this->data['email'] ?? 'noreply@example.com',
                    $this->data['name'] ?? 'Unknown'
                ),
            ],
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.contact-form',
            with: [
                'data' => $this->data  // Pass data to view
            ]
        );
    }
}
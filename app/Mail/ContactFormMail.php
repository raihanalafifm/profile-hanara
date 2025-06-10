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
        $this->data = $data;
    }

    public function envelope(): Envelope
    {
        // Gunakan email dari config, bukan hardcode
        $fromEmail = config('mail.from.address', 'noreply@hanara.id');
        $fromName = config('mail.from.name', 'PT Hanara Prima Solusindo');

        return new Envelope(
            subject: 'Pesan Kontak Baru dari ' . ($this->data['name'] ?? 'Unknown'),
            from: new Address($fromEmail, $fromName),
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
                'data' => $this->data
            ]
        );
    }

    public function attachments(): array
    {
        return [];
    }
}

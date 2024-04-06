<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Attachment;
use App\Models\Mahasiswa;

class EventProposal extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public function __construct(private $mahasiswa)
    {
        //
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Seminar proposal',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'email.eventProposal',
            with: [
                'mahasiswa' => $this->mahasiswa,
                'sempro' => $this->mahasiswa->sempro,
            ]
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        set_time_limit(180);
        return [
            Attachment::fromPath(storage_path('app/public/' . $this->mahasiswa->sempro->sk_penguji))
                ->as('SK PENGUJI.pdf')
                // ->withMime('application/pdf')
        ];

        // return [];
    }
}

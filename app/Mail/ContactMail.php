<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

   public $username, $useremail, $usermessage;


    public function __construct( $username, $useremail, $usermessage)
    {
        $this->username = $username;
        $this->useremail = $useremail;
        $this->usermessage = $usermessage;

    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address('kapuccino@example.com'),
            subject: 'Grazie di averci contattato',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
{
    return new Content(
        view: 'email-contact', 
        with: [
            'username' => $this->username,
            'usermessage' => $this->usermessage,
            'useremail' => $this->useremail 
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
        return [];
    }
}

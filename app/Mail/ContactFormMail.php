<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactFormMail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public function __construct(private array $formData = [])
    {
        //
    }

    public function build()
    {
        $name = $this->formData['name'] ?? 'Unknown';
        $email = $this->formData['email'] ?? 'unknown@example.com';
        $subject = $this->formData['subject'] ?? 'Contact Form';
        $message = $this->formData['message'] ?? 'No message provided';

        return $this->subject('Contact Form: ' . $subject . ' - ' . $name)
                    ->view('emails.contact-form')
                    ->with([
                        'name' => $name,
                        'email' => $email,
                        'subject' => $subject,
                        'message' => $message,
                    ]);
    }
} 
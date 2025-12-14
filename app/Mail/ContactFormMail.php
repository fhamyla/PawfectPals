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

        $htmlContent = '
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>New Contact Form Submission</title>
            <style>
                body { font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif; line-height: 1.6; color: #333; background-color: #f4f4f4; padding: 20px; }
                .email-container { max-width: 600px; margin: 0 auto; background-color: #ffffff; border-radius: 10px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); overflow: hidden; }
                .header { background: linear-gradient(135deg, #ea66e3ff 0%, #a24b9bff 100%); color: white; padding: 30px; text-align: center; }
                .header h1 { font-size: 28px; margin-bottom: 10px; font-weight: 300; }
                .header p { font-size: 16px; opacity: 0.9; }
                .content { padding: 30px; }
                .field { margin-bottom: 25px; padding: 20px; background-color: #f8f9fa; border-radius: 8px; border-left: 4px solid #e666eaff; }
                .label { font-weight: 600; color: #555; font-size: 14px; text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 8px; }
                .value { font-size: 16px; color: #333; word-wrap: break-word; }
                .message-box { background-color: #e3f2fd; padding: 20px; border-radius: 8px; border-left: 4px solid #e221f3ff; margin-top: 10px; }
                .footer { background-color: #f8f9fa; padding: 20px; text-align: center; color: #666; font-size: 12px; border-top: 1px solid #e9ecef; }
                .highlight { color: #ea66c2ff; font-weight: 600; }
            </style>
        </head>
        <body>
            <div class="email-container">
                <div class="header">
                    <h1>🐾 New Contact Form Submission</h1>
                    <p>You have received a new message from your Pawfect Pals website</p>
                </div>
                
                <div class="content">
                    <div class="field">
                        <div class="label">👤 Name</div>
                        <div class="value highlight">' . htmlspecialchars($name) . '</div>
                    </div>
                    
                    <div class="field">
                        <div class="label">📧 Email Address</div>
                        <div class="value">' . htmlspecialchars($email) . '</div>
                    </div>
                    
                    <div class="field">
                        <div class="label">📝 Subject</div>
                        <div class="value highlight">' . htmlspecialchars($subject) . '</div>
                    </div>
                    
                    <div class="field">
                        <div class="label">💬 Message</div>
                        <div class="message-box">' . nl2br(htmlspecialchars($message)) . '</div>
                    </div>
                </div>
                
                <div class="footer">
                    <p><strong>Pawfect Pals</strong> - Making tails wag and hearts purr since 2025</p>
                    <p>This message was sent from your website contact form at ' . date('Y-m-d H:i:s') . '</p>
                </div>
            </div>
        </body>
        </html>';

        return $this->subject('Contact Form: ' . $subject . ' - ' . $name)
                    ->html($htmlContent);
    }
} 
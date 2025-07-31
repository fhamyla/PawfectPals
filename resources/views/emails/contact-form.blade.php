<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Contact Form Submission</title>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
        .container { max-width: 600px; margin: 0 auto; padding: 20px; }
        .header { background: #f8f9fa; padding: 20px; border-radius: 5px; margin-bottom: 20px; }
        .content { background: #fff; padding: 20px; border: 1px solid #ddd; border-radius: 5px; }
        .field { margin-bottom: 15px; }
        .label { font-weight: bold; color: #555; }
        .value { margin-top: 5px; }
        .message-box { background: #f8f9fa; padding: 15px; border-radius: 3px; margin-top: 10px; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>New Contact Form Submission</h2>
            <p>You have received a new message from your website contact form.</p>
        </div>
        
        <div class="content">
            <div class="field">
                <div class="label">Name:</div>
                <div class="value">{{ $name }}</div>
            </div>
            
            <div class="field">
                <div class="label">Email:</div>
                <div class="value">{{ $email }}</div>
            </div>
            
            <div class="field">
                <div class="label">Subject:</div>
                <div class="value">{{ $subject }}</div>
            </div>
            
            <div class="field">
                <div class="label">Message:</div>
                <div class="message-box">{{ $message }}</div>
            </div>
        </div>
        
        <div style="margin-top: 20px; padding-top: 20px; border-top: 1px solid #ddd; color: #666; font-size: 12px;">
            <p><em>This message was sent from your website contact form.</em></p>
        </div>
    </div>
</body>
</html> 
<?php
require_once 'SmtpClient.php';

class MailEngine {
    public static function send($to, $subject, $body, $fromEmail = null) {
        // Use Hostinger SMTP Credentials from config
        $client = new SmtpClient(SMTP_HOST, SMTP_PORT, SMTP_USER, SMTP_PASS);
        
        $fromName = SMTP_FROM_NAME;
        $replyTo = $fromEmail ?? SMTP_USER;

        return $client->send($to, $subject, $body, $fromName, $replyTo);
    }

    public static function sendInquiryNotification($data) {
        $subject = "New Strategic Inquiry: " . $data['name'];
        $body = "
        <div style='font-family: sans-serif; padding: 40px; border: 1px solid #111; background: #fff; max-width: 600px;'>
            <h2 style='color: #6A5AE0; font-size: 24px; margin-bottom: 20px;'>New Inbound Brief</h2>
            <div style='background: #f8faff; padding: 25px; border-radius: 12px; border: 1px solid #eee;'>
                <p style='margin: 10px 0;'><strong>Client:</strong> {$data['name']}</p>
                <p style='margin: 10px 0;'><strong>Email:</strong> {$data['email']}</p>
                <p style='margin: 10px 0;'><strong>Service:</strong> <span style='color: #6A5AE0; font-weight: bold;'>{$data['service_type']}</span></p>
                <p style='margin: 10px 0;'><strong>Budget:</strong> {$data['budget']}</p>
                <hr style='border: 0; border-top: 1px solid #ddd; margin: 20px 0;'>
                <p style='margin: 0;'><strong>Project Brief:</strong><br><br>" . nl2br(htmlspecialchars($data['message'])) . "</p>
            </div>
            <p style='font-size: 11px; color: #999; margin-top: 30px; text-align: center;'>Transmitted via Crea8ve Cool Inbound Engine v2.0</p>
        </div>";

        // Send to your info mail
        return self::send(SMTP_USER, $subject, $body, $data['email']);
    }
}

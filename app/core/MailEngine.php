<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . '/PHPMailer/Exception.php';
require_once __DIR__ . '/PHPMailer/PHPMailer.php';
require_once __DIR__ . '/PHPMailer/SMTP.php';

class MailEngine {
    public static function send($to, $subject, $body, $fromEmail = null, $cc = null) {
        $mail = new PHPMailer(true);

        try {
            // Server settings
            $mail->isSMTP();
            $mail->Host       = SMTP_HOST;
            $mail->SMTPAuth   = true;
            $mail->Username   = SMTP_USER;
            $mail->Password   = SMTP_PASS;
            
            // Dynamic SSL/TLS based on port
            if (SMTP_PORT == 465) {
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            } else {
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            }
            $mail->Port       = SMTP_PORT;

            // Recipients
            $mail->setFrom(SMTP_USER, SMTP_FROM_NAME);
            
            if (is_array($to)) {
                foreach ($to as $recipient) {
                    $mail->addAddress($recipient);
                }
            } else {
                $mail->addAddress($to);
            }

            if ($fromEmail) {
                $mail->addReplyTo($fromEmail);
            }

            // CC settings
            if ($cc) {
                if (is_array($cc)) {
                    foreach ($cc as $ccEmail) {
                        $mail->addCC($ccEmail);
                    }
                } else {
                    $mail->addCC($cc);
                }
            }

            // Content
            $mail->isHTML(true);
            $mail->Subject = $subject;
            $mail->Body    = $body;
            $mail->AltBody = strip_tags($body);

            return $mail->send();
        } catch (Exception $e) {
            error_log("PHPMailer Error: " . $mail->ErrorInfo);
            return false;
        }
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

        // Send to crea8vecool@gmail.com and CC info@crea8vecool.com
        return self::send('crea8vecool@gmail.com', $subject, $body, $data['email'], 'info@crea8vecool.com');
    }
}

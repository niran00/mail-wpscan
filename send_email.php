<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';

// Create a new PHPMailer instance
$mail = new PHPMailer(true);

try {
    // Server settings
    $mail->isSMTP();
    $mail->Host       = 'mail.smtp2go.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = ''; // Your SMTP username
    $mail->Password   = ''; // Your SMTP password
    $mail->SMTPSecure = 'tls';
    $mail->Port       = 2525; // Use the appropriate port (587 for TLS, 465 for SSL)

    // Add one or multiple recipients
    $recipients = array(
        'niran.millet@gmail.com' => 'Niran Millet',
        'niran.millet+nini@gmail.com' => 'Nini'
    );

    // Sender
    $mail->setFrom('niran.millet@gmail.com', 'OFI');
    // Recipients
    foreach ($recipients as $email => $name) {
        $mail->addAddress($email, $name);
    }




    // Content

    $scanResult = file_get_contents('wpscan-result.txt');

    $mail->isHTML(false); // Set to true if using HTML content
    $mail->Subject = 'WP Scan Results';
    $mail->Body    =  $scanResult;

    // Send the email
    $mail->send();
    echo 'Email has been sent.';
} catch (Exception $e) {
    echo "Error: {$mail->ErrorInfo}";
}

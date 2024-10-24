<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require '../vendor/autoload.php';  // Adjust this path if needed

$mail = new PHPMailer(true);

try {
    // Server settings (using SMTP)
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';  // Your SMTP server
    $mail->SMTPAuth = true;
    $mail->Username = 'psruthi231@gmail.com';  // SMTP username
    $mail->Password = 'vgtr mkoq yakm qhwx';  // Use the generated App Password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    // Recipients
    $mail->setFrom($_POST['email'], $_POST['name']);
    $mail->addAddress('psruthi231@gmail.com');  // Your email address

    // Content
    $mail->isHTML(true);
    $mail->Subject = $_POST['subject'];
    $mail->Body = $_POST['message'];

    // Send email
    if ($mail->send()) {
        echo 'OK';
    }

} catch (Exception $e) {
    // Show error message only if there's an issue
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}





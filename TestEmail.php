<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->isSMTP();
    $mail->Host='smtp.gmail.com'; // Set the SMTP server
    $mail->SMTPAuth = true;
    $mail->Username ='ak9517462621@gmail.com';// SMTP username
    $mail->Password = 'sjsjmtmoiiykrbkk'; // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587; // Use port 587 for TLS

    //Recipients
    $mail->setFrom('ak9517462621@gmail.com', 'Mailer');
    $mail->addAddress('amittiwari9517462621@gmail.com', 'Recipient Name');

    // Content
   
    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>

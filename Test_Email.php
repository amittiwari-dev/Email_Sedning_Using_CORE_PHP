<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
$mail=new PHPMailer(true);
try{
$mail->isSMTP();
$mail->Host='smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username='ak9517462621@gmail.com';
$mail->Password='sjsjmtmoiiykrbkk';
//$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;      // using 465 (SSL/TLS)then use this
$mail->SMTPSecure=PHPMailer::ENCRYPTION_STARTTLS;    // using port 587 (STARTTLS)
$mail->Port = 587;

$mail->setFrom('ak9517462621@gmail.com');
$mail->addAddress('amittiwari9517462621@gmail.com');
$mail->Subject="Checking for ports";
$mail->Body="Thanks for Contact me.... ";
$mail->send();
echo 'Message has been sent';

}
catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

?>
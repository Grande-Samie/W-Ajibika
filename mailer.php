<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
// require 'vendor/autoload.php';

function sendmail($email,$name,$from_name, $subject, $message){
$mail = new PHPMailer(true);

try {
    $mail->SMTPDebug = 0;
    $mail->isSMTP();
    $mail->Host     = 'mail.keerthiefarmer.xyz';
    $mail->SMTPAuth = true;
    $mail->Username = 'verify@keerthiefarmer.xyz';
    $mail->Password = 'Keerthi@123';
    $mail->SMTPSecure = 'ssl';
    $mail->Port     = 465;

    $mail->setFrom('verify@keerthiefarmer.xyz', "Verification OTP: $from_name");
    $mail->addAddress($email);
    $mail->isHTML(true);
    $mail->Subject = $subject;
    $mail->Body = "Dear $name, </br> $message </br> Thank you for registering with us";
    $mail->AltBody = 'You may not view this message because your client does  not supoort HTML';
    $mail->send();
    echo "Mail has been sent successfully!";
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: Email might be wrong";
}
}
?>
   

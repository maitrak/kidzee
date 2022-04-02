<?php

require 'PHPMailerAutoload.php';

$mail = new PHPMailer(); // create a new object
$mail->IsSMTP(); // enable SMTP
$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
$mail->SMTPAuth = true; // authentication enabled
$mail->SMTPSecure = 'tls'; // secure transfer enabled REQUIRED for Gmail
$mail->Host = "tls://smtp.gmail.com";
$mail->Port = 587; // or 587
$mail->IsHTML(true);
$mail->Username = "maitrak523@gmail.com";
$mail->Password = "nirmal12345";
$mail->AddAddress("maitrak523@gmail.com");
$mail->SetFrom("maitrak523@gmail.com");
$mail->Subject = "Test";
$mail->Body = "hello";


 if(!$mail->Send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
 } else {
    echo "Message has been sent";
 }

?>
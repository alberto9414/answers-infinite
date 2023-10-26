<?php

$name = $_POST["name"];
$phone = $_POST["phone"];
$email = $_POST["email"];
$topic = $_POST["topic"];
$message = $_POST["message"];

require "vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$mail = new PHPMailer(true);

$mail->SMTPDebug =  SMTP::DEBUG_SERVER;

$mail->isSMTP(); 

$mail->SMTPAuth = true;
$mail->Host = "answersinfinite.com";
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 465;

$mail->Username = "info@answersinfinite.com";
$mail->Password = "answersinfinte";

$mail->setFrom($email,$name);
$mail->addAddress("info@answersinfinite.com", "Answers Infinite");

$mail->Subject = "It worked!";
$mail->Body = $message;

$mail->send();

header("Location: thankyou.php");
?>
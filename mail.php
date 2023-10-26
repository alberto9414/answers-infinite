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

$mail->Host = "answersinfinite.com";
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;

$mail->Username = "info@answersinfinite.com";
$mail->Password = "k]%sm]Z&?*2-";

$mail->addAddress($email,$name);
$mail->setFrom("info@answersinfinite.com", "Answers Infinite");

$mail->Subject = "It worked!";
$mail->Body = $message;

try{
    $mail->send();
    // header("Location: thankyou.php");

 }
catch(Exception $e){
    echo "". $e->getMessage();
}

?>
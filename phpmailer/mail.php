<?php
require 'PHPMailerAutoload.php';
require 'class.phpmailer.php';
require 'class.smtp.php';
error_reporting(0);
session_start();
if (isset($_SESSION['username']))
{

$name= $_POST['name'];
$email=$_POST['email'];
$medicine=$_POST['medicine'];
$advice=$_POST['advice'];

//echo $name." ".$email." ".$medicine." ".$advice;

$mail             = new PHPMailer();

$mail->IsSMTP(); // telling the class to use SMTP
$mail->Host       = "mail.google.com"; // SMTP server
$mail->SMTPDebug  = 2;                     // enables SMTP debug information (for testing)
                                           // 1 = errors and messages
                                           // 2 = messages only
$mail->SMTPAuth   = true;                  // enable SMTP authentication
$mail->SMTPSecure = "tls";                 
$mail->Host       = "smtp.gmail.com";      // SMTP server
$mail->Port       = 587;                   // SMTP port
$mail->Username   = "sabit.asif17@gmail.com";  // username
$mail->Password   = "******";            // password

$mail->SetFrom('sabit.asif17@gmail.com', 'Asif');

$mail->Subject    = "I hope this works!";

$mail->MsgHTML('Blah');

$address = $email;
$mail->AddAddress($address, "Test");

if(!$mail->Send()) 
{
  echo "Mailer Error: " . $mail->ErrorInfo;
} else {
  echo "Message sent!";
}
}

else
{
header("location:home.php?invalid_request");
}
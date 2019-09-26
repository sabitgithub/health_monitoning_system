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


$message = "
<html>
<head>
<title> </title>
</head>
<body>
<p>Please follow the instruction ASAP!</p>
<table>
<tr>
<th>Medicine Name</th>
<th>                </th>
<th>Advise</th>
</tr>
<tr>
<td>                </td>
<td>                </td>
<td>                </td>
</tr>
<tr>
<td> ".$medicine." </td>
<td>                </td>
<td>".$advice."</td>
</tr>
</table>
</body>
</html>
";




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
$mail->Password   = "*******";            // password

$mail->SetFrom('sabit.asif17@gmail.com', 'Asif');

$mail->Subject    = "Emergency Support";

$mail->MsgHTML($message);

$address = $email;
$mail->AddAddress($address, "Test");

if(!$mail->Send()) 
{
  echo "Mailer Error: " . $mail->ErrorInfo;
} else {
  header("location:doc_suggestion.php?mail_sent");
}
}

else
{
header("location:home.php?invalid_request");
}
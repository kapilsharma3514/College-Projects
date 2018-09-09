
<?php  
	session_start();
	@include('config.php');
	require("PHPMailer_5.2.4\PHPMailer_5.2.4\class.phpmailer.php");
	$fn=$_GET['form-first-name'];
	$ln=$_GET['form-last-name'];
	$em=$_GET['form-email'];
	$t=$_GET['form-about-yourself'];

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php

$kk=rand(0,1000);
$hash = md5($kk);
echo $hash;
$password = rand(1000,5000);
$qq="insert into users values('','$fn','$ln','$t',$password,'$em','$hash','','');";
mysql_query($qq);
$mail= new PHPMailer();
$mail->isSMTP();
$mail->SMTPDebug=2;
$mail->From="ms.masterstudy@gmail.com";
$mail->FromName="MasterStudy";
$mail->Host= "smtp.gmail.com";
$mail->SMTPSecure="ssl";
$mail->Port= 465;
$mail->SMTPAuth= true;
$mail->Username="ms.masterstudy@gmail.com";
$mail->Password="minorproject2";


$mail->addAddress($em,"shubh"); // Send email to our user
$mail->isHTML(false);
$mail->Subject = 'Signup | Verification'; // Give the email a subject 
$mail->Body = '
Hi '.$fn.' '.$ln.',
Thanks for signing up!
Your account has been created, you can login with the following credentials after you have activated your account by pressing the url below.
 
------------------------
Username: '.$em.'
Password: '.$password.'
------------------------
 
Please click this link to activate your account:
http://localhost/lets%20begin/verify.php?email='.$em.'&hash='.$hash.'
 
'; // Our message above including the link
                     
$headers = 'From:shubhanshu12@gmail.com' . "\r\n"; // Set from headers
if($mail->Send())
echo "<script> alert('A verification email has been sent to registered Email Id')</script>" ;// Send our email
else
echo "<script> alert('Something went wrong. Please try after some time...')</script>";
?>
<script>window.location.href="login.php?flag=1";</script>
</body>
</html>
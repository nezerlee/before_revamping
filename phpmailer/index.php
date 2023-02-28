<?php
/*##########Script Information#########
  # Purpose: Send mail Using PHPMailer#
  #          & Gmail SMTP Server 	  #
  # Created: 24-11-2019 			  #
  #	Author : Hafiz Haider			  #
  # Version: 1.0					  #
  # Website: www.BroExperts.com 	  #
  #####################################*/


//Include required PHPMailer files
	require 'includes/PHPMailer.php';
	require 'includes/SMTP.php';
	require 'includes/Exception.php';
//Define name spaces
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;
	use PHPMailer\PHPMailer\Exception;
//Create instance of PHPMailer
	$mail = new PHPMailer();
//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isMail();                                      // Set mailer to use SMTP
$mail->Host = "ssl://smtp.gmail.com";  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'nezerabsolute@gmail.com';                 // SMTP username
$mail->Password = 'MynameisNezer95.';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->From = 'nezerabsolute@gmail.com';
$mail->Sender = 'nezerabsolute@gmail.com';
$mail->FromName = "Eben";
//$mail->addAddress('joe@example.net', 'Joe User');     // Add a recipient
$mail->addAddress('xtremeeben@gmail.com');               // Name is optional

//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
$name = "Eben";
$phone = "345678";
$email = "bonuzx1@gmail.com";
$mail->isHTML(true);                                  // Set email format to HTML
$message = "";
$mail->Subject = 'SASP Contact Form';
$mail->Body = $message;
$mail->Body .= "<br /><br />Below are my contact details <br /> Name: ";
$mail->Body .= $name;
$mail->Body .= "<br />My Phone number: ";
$mail->Body .= $phone;
$mail->Body .= "<br /> My email address: ";
$mail->Body .= $email;


$mail->AltBody = 'You are using basic web browser ';
if(is_array($_FILES)) {
    $mail->AddAttachment($FileName,$FileName);
}

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
    print_r($mail);
    exit();
//    header('Location: thankyou.html');
}
?>
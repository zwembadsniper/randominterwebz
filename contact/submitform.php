<?php
$email = $_POST['email'];
$msg = $_POST['message'];
/**
 * This example shows settings to use when sending via Google's Gmail servers.
 */
//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
date_default_timezone_set('Etc/UTC');
require 'PHPMailerAutoload.php';
//Create a new PHPMailer instance
$mail = new PHPMailer;
//Tell PHPMailer to use SMTP
$mail->isSMTP();
//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
//Set the hostname of the mail server
$mail->Host = 'smtp';
// use
// $mail->Host = gethostbyname('smtp.gmail.com');
// if your network does not support SMTP over IPv6
//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;
//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'tls';
//Whether to use SMTP authentication
$mail->SMTPAuth = true;
//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "";
//Password to use for SMTP authentication
$mail->Password = "";
//Set who the message is to be sent from
$mail->setFrom('', '');
//Set an alternative reply-to address
$mail->addReplyTo('', '');
//Set who the message is to be sent to
$mail->addAddress('', '');
//Set the subject line
$mail->Subject = 'New message from' . ": " . $email;
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->msgHTML = "hoi";
//Replace the plain text body with one created manually
$mail->AltBody = '';
$mail->Body    = "message:" . " " . $msg;
//Attach an image file
//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}

?>
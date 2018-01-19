<?php

	require 'PHPMailer/PHPMailerAutoload.php';

	$mail = new PHPMailer;

	$mail->isSMTP();                                   // Set mailer to use SMTP
	$mail->Host = 'md-in-45.webhostbox.net';                    // Specify main and backup SMTP servers
	$mail->SMTPAuth = true;                            // Enable SMTP authentication
	$mail->Username = 'noreply@keytel.in';          // SMTP username
	$mail->Password = 'Noreply@Tech#001'; // SMTP password
	$mail->SMTPSecure = 'tls';                         // Enable TLS encryption, `ssl` also accepted
	$mail->Port = 25;                                 // TCP port to connect to

	$mail->setFrom('noreply@keytel.in', 'No Reply');
	//$mail->addReplyTo('noreply@keytel.in', 'No Reply');
	$mail->addAddress('anshul.smarty16@gmail.com');   // Add a recipient
	//$mail->addCC('cc@example.com');
	//$mail->addBCC('bcc@example.com');

	$mail->isHTML(true);  // Set email format to HTML

	$bodyContent  = '<h4><b>Details</b></h4>';
	$bodyContent .= '<p><b>'.$_POST['name'].'</b></p>';
	$bodyContent .= '<p>Mobile:+91 <b>'.$_POST['mobile'].'</b></p>';
	$bodyContent .= '<p>Phone:+91 <b>'.$_POST['phone'].'</b></p>';
	$bodyContent .= '<p>Email:<b>'.$_POST['email'].'</b></p>';
	
	$mail->Subject = 'Contact Us';
	//$mail->Subject = 'Email from Keytel By '.$_POST['your-name'];
	$mail->Body    = $bodyContent;

	if(!$mail->send()) {
		echo 'Message could not be sent.';
		echo 'Mailer Error: ' . $mail->ErrorInfo;
	} else {
		echo 'Message has been sent';
	}

?>

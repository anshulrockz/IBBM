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

	$bodyContent  = '<h4>Program: <b>'.$_POST['program'].'</b></h4>';
	$bodyContent .= '<p><b>'.$_POST['first_name'].' '.$_POST['middle_name'].' '.$_POST['last_name'].'</b></p>';
	$bodyContent .= '<p>Father Name is <b>'.$_POST['father_name'].'</b></p>';
	$bodyContent .= '<p>Mobile:+91 <b>'.$_POST['mobile'].'</b></p>';
	$bodyContent .= '<p>Email:<b>'.$_POST['email'].'</b></p>';
	$bodyContent .= '<p>Gender:<b>'.$_POST['gender'].'</b></p>';
	$bodyContent .= '<p>Date of birth:<b>'.$_POST['dob_day'].'-'.$_POST['dob_month'].'-'.$_POST['dob_year'].'</b></p>';
	$bodyContent .= '<p>Qualification:<b>'.$_POST['qualification'].'</b></p>';
	$bodyContent .= '<p>Address: '.$_POST['address'].'</p>';

	$mail->Subject = 'Online Course Enquiry';
	//$mail->Subject = 'Email from Keytel By '.$_POST['your-name'];
	$mail->Body    = $bodyContent;

	if(!$mail->send()) {
		echo 'Message could not be sent.';
		echo 'Mailer Error: ' . $mail->ErrorInfo;
	} else {
		echo 'Message has been sent';
	}

?>

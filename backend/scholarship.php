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
	
	//$bodyContent  = '<h4>Query From <a href="keytel.in">Keytel</a></h4>';
	$bodyContent  = '<style>
					table {
						font-family: arial, sans-serif;
						border-collapse: collapse;
						width: 100%;
					}

					td, th {
						border: 1px solid #dddddd;
						text-align: left;
						padding: 8px;
					}

					tr:nth-child(even) {
						background-color: #dddddd;
					}
					</style>';
	$bodyContent .= '<p>Name: <b>'.$_POST['first_name'].' '.$_POST['last_name'].'</b></p>';
	$bodyContent .= '<p>Mobile: <b>'.$_POST['mobile'].'</b></p>';
	$bodyContent .= '<p>Email: <b>'.$_POST['email'].'</b></p>';
	$bodyContent .= '<p><b>Address</b>'.$_POST['address'].'</p>';
	//$bodyContent .= '<p>'.$_POST['address'].'</p>';
	$bodyContent .= '<p>'.$_POST['city'].', '.$_POST['state'].', '.$_POST['pin'].'</p>';
	$bodyContent .= '<p>Share Market Knowledge: '.$_POST['experience'].'</p>';
	$bodyContent .= '<p>Occupation: '.$_POST['occupation'].'</p>';
	$bodyContent .= '<table>
					  <tr>
						<th>Standard </th>
						<th>Year </th>
						<th>Board </th>
						<th>% Marks Obtained </th>
					  </tr>
					  <tr>
						<th>Xth</th>
						<td>'.$_POST['10_year'].'</td>
						<td>'.$_POST['10_school'].'</td>
						<td>'.$_POST['10_marks'].'</td>
					  </tr>
					  <tr>
						<th>XIIth</th>
						<td>'.$_POST['12_year'].'</td>
						<td>'.$_POST['12_school'].'</td>
						<td>'.$_POST['12_marks'].'</td>
					  </tr>
					  <tr>
						<th>Graduation</th>
						<td>'.$_POST['grad_year'].'</td>
						<td>'.$_POST['grad_school'].'</td>
						<td>'.$_POST['grad_marks'].'</td>
					  </tr>
					  <tr>
						<th>Post Graduation</th>
						<td>'.$_POST['post_grad_year'].'</td>
						<td>'.$_POST['post_grad_school'].'</td>
						<td>'.$_POST['post_grad_marks'].'</td>
					  </tr>
					</table>';
	

	$mail->Subject = 'Scholarship';
	$mail->Body    = $bodyContent;

	if(!$mail->send()) {
		echo 'Message could not be sent.';
		echo 'Mailer Error: ' . $mail->ErrorInfo;
	} else {
		echo 'Message has been sent';
	}

?>

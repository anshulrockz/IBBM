<?php


if(isset($_POST['mobile'])){
	$i=1;
$na=$right=$wrong=0;
	while($i<=22){
		$arr='que_'.$i;
		if(!isset($_POST[$arr])) $na++ ;
			$i++;
	}
	if(isset($_POST['que_1'])== 'a'){
			$right++;
	}
	if(isset($_POST['que_2'])== 'c'){
			$right++;
	}
	if(isset($_POST['que_3'])== 'a'){
			$right++;
	}
	if(isset($_POST['que_4'])== 'c'){
			$right++;
	}
	if(isset($_POST['que_5'])== 'b'){
			$right++;
	}
	if(isset($_POST['que_6'])== 'b'){
			$right++;
	}
	if(isset($_POST['que_7'])== 'e'){
			$right++;
	}
	if(isset($_POST['que_8'])== 'c'){
			$right++;
	}
	if(isset($_POST['que_9'])== 'b'){
			$right++;
	}
	if(isset($_POST['que_10'])== 'c'){
			$right++;
	}
	if(isset($_POST['que_11'])== 'a'){
			$right++;
	}
	if(isset($_POST['que_12'])== 'a'){
			$right++;
	}
	if(isset($_POST['que_13'])== 'a'){
			$right++;
	}
	if(isset($_POST['que_14'])== 'a'){
			$right++;
	}
	if(isset($_POST['que_15'])== 'b'){
			$right++;
	}
	if(isset($_POST['que_16'])== 'c'){
			$right++;
	}
	if(isset($_POST['que_17'])== 'c'){
			$right++;
	}
	if(isset($_POST['que_18'])== 'a'){
			$right++;
	}
	if(isset($_POST['que_19'])== 'b'){
			$right++;
	}
	if(isset($_POST['que_20'])== 'a'){
			$right++;
	}
	if(isset($_POST['que_21'])== 'a'){
			$right++;
	}
	if(isset($_POST['que_22'])== 'a'){
			$right++;
	}
	$wrong = 22 - ($right+$na);
	$result  ='<p id="correct">Correct Answers: '.$right.'<p>';
	$result .='<p id="wrong">Wrong Answers: '.$wrong.'<p>';
	$result .='<p id="not">Not Answered: '.$na.'<p>';
	//$result .='<h3>Thanks To Take Quiz<h3>';
	

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
//	$mail->addReplyTo('noreply@keytel.in', 'No Reply');
	$mail->addAddress('anshul.smarty16@gmail.com');   // Add a recipient
//	$mail->addCC('cc@example.com');
//	$mail->addBCC('bcc@example.com');

	$mail->isHTML(true);  // Set email format to HTML
	
	$bodyContent  = '<h4>Quiz</h4>';
	$bodyContent .= '<p>Name: <b>'.$_POST['name'].'</b></p>';
	$bodyContent .= '<p>Mobile: <b>'.$_POST['mobile'].'</b></p>';
	$bodyContent .= '<p>Email: <b>'.$_POST['email'].'</b></p>';
	//$bodyContent .= '<p><b>Address</b>'.$_POST['address'].'</p>';
	//$bodyContent .= '<p>'.$_POST['address'].'</p>';
	//$bodyContent .= '<p>'.$_POST['city'].', '.$_POST['state'].', '.$_POST['pin'].'</p>';
	//$bodyContent .= '<p>Share Market Knowledge: '.$_POST['experience'].'</p>';
	//$bodyContent .= '<p>Occupation: '.$_POST['occupation'].'</p>';
	

	$mail->Subject = 'Quiz';
	$mail->Body    = $bodyContent;
			
	if(!$mail->send()) {
		echo $result;
		//echo 'Message could not be sent.';
		//echo 'Mailer Error: ' . $mail->ErrorInfo;
	} else {
		echo $result;
	} 
}
?>

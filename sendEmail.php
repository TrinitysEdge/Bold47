<?php
	header ("Location: http://bold47.trinitysedge.com/thanks.php");
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$emailAddress = $_POST['email'];
	$phone = $_POST['phone'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];
	
	$email_to = "admin@bold47.trinitysedge.com";
	$email_from = "contact@bold47.trinitysedge.com";
	$email_subject = "$subject";
	$email_body = "From: $firstName $lastName\n" .
				   "Contact: $emailAddress; $phone\n\n" .
				   "$message";	
	$email_headers = "From: $email_from \r\n" .
				"Reply-To: $emailAddress \r\n";
	
	mail($email_to, $email_subject, $email_body, $email_headers);
	exit;
?>
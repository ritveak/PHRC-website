<?php
	
	$to = 'phrcamro@gmail.com'; 
	$subject = $_POST['subject']; 
	$msg=$_POST['message'];
	$name=$_POST['nm'];
	$id=$_POST['mail'];

	// $file_name=$_FILES['file']['tmp_name'];
	// $file_type=$_FILES['file']['type'];

	$headers = "MIME-Version: 1.0\r\n"; 
	$headers .= "From: <phrcwebsite@example.com>\r\n";
	$headers .= "Content-Type: text/html;charset=UTF-8;". "\r\n"; 

	$message = $msg."\r\n";
	$message .= "";
	$message .= "Sender's details:"."\n"."Name:".$name."\r\n";
	$message .= "Email ID:".$id."\r\n";
	$message .= "";
	$mail_sent = @mail($to, $subject, $message, $headers); 

	echo $mail_sent ? "<script>alert('Mail Sent')</script>" :"<script>alert('Mail Failed')</script>";
	echo $mail_sent ? "<script>window.open('index.html')</script>" :"<script>window.open('index.html')</script>";

?>
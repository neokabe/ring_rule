<?php

if (isset($_POST['submit'])) {
	$name =$_POST['name'];
	$subject =$_POST['subject'];
	$mailFrom =$_POST['mail'];
	$message =$_POST['message'];


//doest work with gmail addresses(cng.nnadi@gmail.com)
	//get a hosting service with a domain email inorder to forward messages to gmail addresses

	$mailTo ="nnnn.mat@hotmail.com";
	$headers = "From: ".$mailFrom;
	$txt= "You have recieved an email from ".$name.".\n\n".$message;  ; 


	mail($mailTo, $subject, $txt, $headers);

	header("Location: index.php?mailsent");
	
}
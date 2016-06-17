<?php
	require_once("includes/functions.php");
	require_once("includes/config.php");

	if(isset($_POST["send_quote"])){
		$name = trim($_POST["name"]);
		$email = trim($_POST["email"]);
		$phone = trim($_POST["phone"]);
		$comments = trim($_POST["comments"]);
		$suburb = trim($_POST["suburb"]);
		$service = trim($_POST["service"]);

		if(is_null($name) || is_null($email) || is_null($suburb)){
			redirectTo("contact_us.php?message=1");
		}else{
			$subject = "Quotation request from " . $name . " for " . $service;
			$body = "The details of the request are :<br>" . 
					"Name : {$name} <br>" . 
					"Email : {$email} <br>" . 
					"Phone : {$phone} <br>" . 
					"Suburb : {$suburb} <br>" . 
					"Service : {$service} <br>" . 
					"Comments : {$comments} <br>" ;
			if(mailTo($subject, $body, $email) == 1){
				redirectTo("contact_us.php?message=2");
			}else{
				redirectTo("contact_us.php?message=0");
			}
		}

	}else{
		redirectTo("index.php");
	}
?>
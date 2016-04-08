<?php 
	require_once 'turbo_send_email_code/lib/TurboApiClient.php';
	require_once 'config.php';

	function mailTo($subject, $body){
		$email = new Email();
		$email->setFrom(SENDER_EMAIL);
		$email->setToList(RECIEVER_EMAIL);		
		$email->setSubject($subject);
		$email->setContent("Content");
		$email->setHtmlContent($body);
		$email->addCustomHeader('X-FirstHeader', "value");
		$email->addCustomHeader('X-SecondHeader', "value");
		$email->addCustomHeader('X-Header-da-rimuovere', 'value');
		$email->removeCustomHeader('X-Header-da-rimuovere');

		$turboApiClient = new TurboApiClient("excalibur@techspardha.org", "ZbP3rcBa");

		$response = $turboApiClient->sendEmail($email);

		if(strcmp($response["message"],"OK") == 0){
			return 1;
		}else{
			return 2;
		}
	}

	function redirectTo($location = NULL){
		if($location !=NULL){
			header("Location: {$location}");
			exit;
		}
	}

	function warningMessage($message){
		echo "<div class=\"alert alert-warning\">
				<a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
  				<strong>Warning!</strong> $message
			</div>";
	}

	function successMessage($message){
		echo "<div class=\"alert alert-success\">
				<a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
  				<strong>Success!</strong> {$message}
			</div>";
	}

	function infoMessage($message){
		echo "<div class=\"alert alert-info\">
				<a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
  				<strong>Success!</strong> {$message}
			</div>";
	}

	/*function mailTo($subject, $body){
		// Mail
		$transport = Swift_MailTransport::newInstance();
		
		// Create the Mailer using your created Transport
		$mailer = Swift_Mailer::newInstance($transport);

		// Create a message
		
		$message = Swift_Message::newInstance('')
		  ->setFrom(array('vermanavneet003@gmail.com' => 'Navneet Verma'))
	  	  ->setTo(array('vermanavneet003@yahoo.com' => 'Navneet Verma'))
		  ->setBody($body);
		
		// Send the message
		$result = $mailer->send($message);		
		return $result;
		/*if($result == 1){
			return true;
		}else{
			return false;
		}
	}*/	
?>
<?php

require_once "lib/TurboApiClient.php";


$email = new Email();
$email->setFrom("vermanavneet003@gmail.com");
$email->setToList("vermanavneet003@yahoo.com");
//$email->setCcList("dd@domain.com,ee@domain.com");
//$email->setBccList("ffi@domain.com,rr@domain.com");	
$email->setSubject("THis is from abc");
$email->setContent("This is content");
$email->setHtmlContent("html content");
$email->addCustomHeader('X-FirstHeader', "value");
$email->addCustomHeader('X-SecondHeader', "value");
$email->addCustomHeader('X-Header-da-rimuovere', 'value');
$email->removeCustomHeader('X-Header-da-rimuovere');



$turboApiClient = new TurboApiClient("excalibur@techspardha.org", "ZbP3rcBa");


$response = $turboApiClient->sendEmail($email);

echo $response["message"];

//array(1) { ["message"]=> string(2) "OK" }




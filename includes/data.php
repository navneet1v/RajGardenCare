<?php 
	$services = array('No Service', 'lawn_mowning', 'edging', 'triming', 'garden_bed_insatllation', 'mulch', 'pebbles', 'new_turf', 'new_plant', 'hedges_installation', 'land_scaping', 'blower_clean_up' );

	$services_details = array();

	$lawn_mowning = array("name" => "Lawn Mowning", 
						"short_description"=>"This is a short description of lawn mowning",
						"url" =>"services/selected_service.php?service_name=lawn_mowning",
						"description" => "This is the longer description of the lawn mowing",
						"price"=> "The price of the service depends on the amount of work.",
						"image" => "images/Pic1.jpg"
						);
	$services_details["lawn_mowning"] = $lawn_mowning;

	$edging = array("name" => "Edging", 
						"short_description"=>"This is a short description of edging",
						"url" => "services/selected_service.php?service_name=edging",
						"description" => "This is the longer description of the edging",
						"price"=> "The price of the service depends on the amount of work.",
						"image" => "images/Pic2.jpg"
						);
	$services_details["edging"] = $edging;

	$triming = array("name" => "Triming", 
						"short_description"=>"This is a short description of Triming",
						"url" => "services/selected_service.php?service_name=triming",
						"description" => "This is the longer description of the Triming",
						"price"=> "The price of the service depends on the amount of work.",
						"image" => "images/Pic11.jpg"
						);
	$services_details["triming"] = $triming;

	$garden_bed_insatllation = array("name" => "Garden Bed Installation", 
						"short_description"=>"This is a short description of Garden Bed Installation",
						"url" => "services/selected_service.php?service_name=garden_bed_installation",
						"description" => "This is the longer description of the Garden Bed Installation",
						"price"=> "The price of the service depends on the amount of work.",
						"image" => "images/Pic3.jpg"
						);
	$services_details["garden_bed_insatllation"] = $garden_bed_insatllation;

	$mulch = array("name" => "Mulch", 
						"short_description"=>"This is a short description of Mulch",
						"url" => "services/selected_service.php?service_name=mulch",
						"description" => "This is the longer description of the Mulch",
						"price"=> "The price of the service depends on the amount of work.",
						"image" => "images/Pic4.jpg"
						);
	$services_details["mulch"] = $mulch;

	$pebbles = array("name" => "Pebbles", 
						"short_description"=>"This is a short description of Pebbles",
						"url" => "services/selected_service.php?service_name=pebbles",
						"description" => "This is the longer description of the Pebbles",
						"price"=> "The price of the service depends on the amount of work.",
						"image" => "images/Pic5.jpg"
						);
	$services_details["pebbles"] = $pebbles;

	$new_turf = array("name" => "New Turf", 
						"short_description"=>"This is a short description of New Turf",
						"url" => "services/selected_service.php?service_name=new_turf",
						"description" => "This is the longer description of the new_turf",
						"price"=> "The price of the service depends on the amount of work.",
						"image" => "images/Pic6.jpg"
						);
	$services_details["new_turf"] = $new_turf;

	$new_plant = array("name" => "New Plant", 
						"short_description"=>"This is a short description of New Plant",
						"url" => "services/selected_service.php?service_name=new_plant",
						"description" => "This is the longer description of the New Plant",
						"price"=> "The price of the service depends on the amount of work.",
						"image" => "images/Pic7.jpg"
						);
	$services_details["new_plant"] = $new_plant;

	$hedges_installation = array("name" => "Hedges Installation", 
						"short_description"=>"This is a short description of Hedges Installation",
						"url" => "services/selected_service.php?service_name=hedges_installation",
						"description" => "This is the longer description of the Hedges Installation",
						"price"=> "The price of the service depends on the amount of work.",
						"image" => "images/Pic8.jpg"
						);
	$services_details["hedges_installation"] = $hedges_installation;

	$land_scaping = array("name" => "Land Scaping", 
						"short_description"=>"This is a short description of Land Scaping",
						"url" => "services/selected_service.php?service_name=land_scaping",
						"description" => "This is the longer description of the Land Scaping",
						"price"=> "The price of the service depends on the amount of work.",
						"image" => "images/Pic9.jpg"
						);
	$services_details["land_scaping"] = $land_scaping;

	$blower_clean_up = array("name" => "Blower Cleanup", 
						"short_description"=>"This is a short description of Blower Cleanup",
						"url" => "services/selected_service.php?service_name=blower_cleanup",
						"description" => "This is the longer description of the Blower Cleanup",
						"price"=> "The price of the service depends on the amount of work.",
						"image" => "images/Pic10.jpg"
						);
	$services_details["blower_clean_up"] = $blower_clean_up;

?>

<?php 
	$services = array('No Service', 'lawn_mowning', 'edging', 'triming', 'garden_bed_installation', 'mulch', 'pebbles', 'new_turf', 'new_plant', 'hedges_installation', 'land_scaping', 'blower_clean_up' );

	$services_details = array();

	$lawn_mowning = array("name" => "Lawn Mowning", 
						"short_description"=>"Professional lawn mowning at a reasonable price.",
						"url" =>"services/selected_service.php?service_name=lawn_mowning",
						"description" => "Professional lawn cut provides the best possible finish for your lawn including professional edging of entire lawn area including around trees and other garden features.",
						"price"=> "The price of the service depends on the amount of work.",
						"image" => "images/Pic9.jpg"
						);
	$services_details["lawn_mowning"] = $lawn_mowning;

	$edging = array("name" => "Edging", 
						"short_description"=>"Edging of the lawns at a very reasonable price.",
						"url" => "services/selected_service.php?service_name=edging",
						"description" => "An edging in your landscape helps give your yard a cleaner, more manicured look. It defines spaces, and helps keep lawns from creeping into flower beds, weeds out of vegetable gardens, and plants from spilling onto walkways. Edging is a somewhat magical gardening tool. It's one of those things that you don't really think about until you see the difference between a yard with it and a yard without it.<br>We do professional edging with the help of new technology.",
						"price"=> "The price of the service depends on the amount of work.",
						"image" => "images/Pic16.jpg"
						);
	$services_details["edging"] = $edging;

	$triming = array("name" => "Triming", 
						"short_description"=>"Trim your garden leaves to make your garden beautiful.",
						"url" => "services/selected_service.php?service_name=triming",
						"description" => "Triming of leaves makes the garden look clean and gives a new look to your garden. We provide best triming to your garden.",
						"price"=> "The price of the service depends on the amount of work.",
						"image" => "images/Pic7.jpg"
						);
	$services_details["triming"] = $triming;

	$garden_bed_insatllation = array("name" => "Garden Bed Installation", 
						"short_description"=>"Install new garden bed at a reasonable price.",
						"url" => "services/selected_service.php?service_name=garden_bed_installation",
						"description" => "We install garden bed in your garden using the new technology under the professionals.",
						"price"=> "The price of the service depends on the amount of work.",
						"image" => "images/Pic2.jpg"
						);
	$services_details["garden_bed_installation"] = $garden_bed_insatllation;

	$mulch = array("name" => "Mulch", 
						"short_description"=>"Hide the area around the shrubs with the mulch and make your garden beautiful.",
						"url" => "services/selected_service.php?service_name=mulch",
						"description" => "Is your garden have uprooted shrubs and you want to cover them so that it doesnt disrupt your beauty of the garden. Call us and we will provide you with the best mulch and make your garden more beautiful.",
						"price"=> "The price of the service depends on the amount of work.",
						"image" => "images/Pic17.jpg"
						);
	$services_details["mulch"] = $mulch;

	$pebbles = array("name" => "Pebbles", 
						"short_description"=>"Surround your garden with the pebbles to increase the beauty of your garden.",
						"url" => "services/selected_service.php?service_name=pebbles",
						"description" => "Pebbles near the edge of the garden increase the beauty of the garden. So we at Raj Garden can help you in laying the pebbles around the edges of your garden to look it more beautiful.",
						"price"=> "The price of laying the pebbles may vary on the quality of the pebbles and the amount of work.",
						"image" => "images/Pic6.jpg"
						);
	$services_details["pebbles"] = $pebbles;

	$new_turf = array("name" => "New Turf", 
						"short_description"=>"Install the new turf in your garden at a very low price.",
						"url" => "services/selected_service.php?service_name=new_turf",
						"description" => "Need new turf in your lawn and want to make your garden look beautiful as it never was?<br>Call us and install new turf in your garden.",
						"price"=> "The price of the service depends on the amount of work.",
						"image" => "images/Pic11.jpg"
						);
	$services_details["new_turf"] = $new_turf;

	$new_plant = array("name" => "New Plant", 
						"short_description"=>"Want to plant a new plant in your garden. Call us.",
						"url" => "services/selected_service.php?service_name=new_plant",
						"description" => "Want to plant a new plant in your garden?<br> Call us. We provide you the best plant that will grow well and increase the beauty of your garden.",
						"price"=> "The price and installation of the plant will depend on plant to plant.",
						"image" => "images/Pic20.jpg"
						);
	$services_details["new_plant"] = $new_plant;

	$hedges_installation = array("name" => "Hedges Installation", 
						"short_description"=>"Install the hedges in your garden from professionals. Call us.",
						"url" => "services/selected_service.php?service_name=hedges_installation",
						"description" => "Careful and regular hedging of your garden is essential to it's maintenance and includes roses, plants, shrubs, fruit trees and small trees. ",
						"price"=> "The price of the service depends on the amount of work.",
						"image" => "images/Pic18.jpg"
						);
	$services_details["hedges_installation"] = $hedges_installation;

	$land_scaping = array("name" => "Land Scaping", 
						"short_description"=>"We do professional land scaping at a very reasonable price.",
						"url" => "services/selected_service.php?service_name=land_scaping",
						"description" => "We do professional land scaping at a very reasonable price. Give us a call to know more.",
						"price"=> "The price of the service depends on the amount of work.",
						"image" => "images/Pic14.jpg"
						);
	$services_details["land_scaping"] = $land_scaping;

	$blower_clean_up = array("name" => "Blower Cleanup", 
						"short_description"=>"Get your blower cleaned up on just a phone call. Call Raj garden care.",
						"url" => "services/selected_service.php?service_name=blower_cleanup",
						"description" => "Fed up with the dirty blowers??<br>Call us and get your blower cleaned up. We can do it for you.",
						"price"=> "The price of the service depends on the amount of work.",
						"image" => "images/Pic19.jpg"
						);
	$services_details["blower_clean_up"] = $blower_clean_up;

?>

<!DOCTYPE html>
<html>
<head>
	<title>
		<?php 
			global $current_service; 
			if(isset($_GET["service_name"])){
				echo $current_service["name"];
			}else{
				echo "All Services";
			}
		?>
	</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="../images/logo_green.png" type="image/x-icon" />
	<link rel="stylesheet" href="../css/bootstrap.min.css" >	
	<link rel="stylesheet" href="../css/common.css">
	<script type="text/javascript" src="../js/jquery-2.2.0.min.js"></script>
	<script type="text/javascript " src="../js/bootstrap.min.js"></script>	
	<script type="text/javascript " src="../js/common.js"></script>	
</head>
<body>	
	<nav class="navbar navbar-inverse navbar-fixed-top" >
	  <div class="container-fluid">
	    <div class="navbar-header">
	      	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
	        	<span class="icon-bar"></span>
	        	<span class="icon-bar"></span>
	        	<span class="icon-bar"></span>                        
	      	</button>	      
	      	<span>
	      		<a href = "/raj_garden_care"><img class="pull-left image_class" src="../images/logo_large.png" height="50" width="50" /></a>
	      		<webtitle class="title"><b><i>&nbsp;Raj Garden Care</i></b></webtitle>
			</span>				
	    </div>

	    <div class="collapse navbar-collapse" id="myNavbar">
	      <ul class="nav navbar-nav pull-right" style="margin-left:10em; margin-top:6px; margin-bottom:6px;">
	        <li><a href="../"><img src="../images/home.png" height="24" width="24">&nbsp;Home</a></li>
	        <li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="../services.php">
				<img src="../images/services.png" height="24" width="24">&nbsp;Services We Offer</a>
				<ul class="dropdown-menu" style="background-color: #193B1B;">
					<li><a href="../services.php">All Services</a></li>
					<li><a href="selected_service.php?service_name=lawn_mowning">Lawn Mowing</a></li>
					<li><a href="selected_service.php?service_name=edging">Edging</a></li>
					<li><a href="selected_service.php?service_name=triming">Triming</a></li>
					<li><a href="selected_service.php?service_name=garden_bed_installation">Garden Bed Installation</a></li>
					<li><a href="selected_service.php?service_name=mulch">Mulch</a></li>
					<li><a href="selected_service.php?service_name=pebbles">Pebbles</a></li>
					<li><a href="selected_service.php?service_name=new_turf">New Turf</a></li>
					<li><a href="selected_service.php?service_name=new_plant">New Plant</a></li>
					<li><a href="selected_service.php?service_name=hedges_installation">Hedges Installation</a></li>
					<li><a href="selected_service.php?service_name=land_scaping">Land Scaping</a></li>
					<li><a href="selected_service.php?service_name=blower_clean_up">Blower Clean Up</a></li>
				</ul>
	        </li>
	        <li><a href="../contact_us.php"><img src="../images/telephone46.png" height="24" width="24">&nbsp;Contact Us</a></li>
	        <!-- <li><a href="../find_us.php"><img src="../images/find_us.png" height="24" width="24">&nbsp;Find Us</a></li>	         -->
	      </ul>	      
	    </div>
	  </div>
	</nav>
	<div class="container col-lg-10 col-md-8 col-sm-8 col-xs-6 col-lg-offset-1 col-xs-offset-2 col-md-offset-2 col-sm-offset-2" style="margin-top:6%;">
<?php
	require_once("../includes/data.php");
	$service_name = $_GET["service_name"];
	global $services_details;
	$current_service = $services_details[$service_name];
?>
<?php require_once("../includes/services_header.php"); ?>

	<div class="panel panel-success col-lg-12 col-md-12 col-sm-12 col-xs-12" style="box-shadow: 10px 10px #A4BD9E; padding:0px; margin:0px;" >
        <div class="panel-heading">
            <img src="../images/services.png">
           	&nbsp;&nbsp;<secondheading class="secondheading"><?php echo $current_service["name"] ; ?></secondheadin>
        </div>            
      	<div class="panel-body" style="background-color: #f5f5f5;">
      		<img class="img-responsive img-thumbnail pull-left" src="../<?php echo $current_service["image"]; ?>" alt="No Image" width="400" height="400">
            <div class="conatiner col-lg-7 col-sm-12 col-md-7 col-xs-12">
              <h3><?php echo $current_service["name"] ; ?></h3>
              <hr class="service_line">
              <p class="text-justify"><?php echo $current_service["description"]; ?></p>
              <p><?php echo $current_service["price"]; ?></p>
              <p>Call Us <b><span class="glyphicon glyphicon-phone"></span>&nbsp;0452 427 886,&nbsp;<span class="glyphicon glyphicon-phone"></span>&nbsp;0468 465 004</b></p>
            </div>
      	</div>
    </div>
<?php require_once("../includes/footer.php"); ?>
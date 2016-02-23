<?php
	require_once("../includes/data.php");
	$service_name = $_GET["service_name"];
	global $services_details;
	$current_service = $services_details[$service_name];
?>
<?php require_once("../includes/services_header.php"); ?>

	<div class="panel panel-success " style="box-shadow: 10px 10px #5AC445;" >
        <div class="panel-heading">
            <img src="../images/services.png">
           	&nbsp;&nbsp;<secondheading class="secondheading"><?php echo $current_service["name"] ; ?></secondheadin>
        </div>            
      	<div class="panel-body" style="background-color: #f5f5f5;">
      		<img class="img-responsive img-thumbnail pull-left" src="<?php echo $current_service["image"]; ?>" alt="Chania" width="400" height="400">
            <div class="conatiner col-lg-7 col-sm-6 col-md-6 col-xs-2">
              <h3><?php echo $current_service["name"] ; ?></h3>
              <hr class="service_line">
              <p><?php echo $current_service["description"]; ?></p>
              <p><?php echo $current_service["price"]; ?></p>
              <p>Call Us <b><span class="glyphicon glyphicon-phone"></span>&nbsp;+61-452427886,&nbsp;<span class="glyphicon glyphicon-phone"></span>&nbsp;+61-468465004</b></p>
            </div>
      	</div>
    </div>
<?php require_once("../includes/footer.php"); ?>
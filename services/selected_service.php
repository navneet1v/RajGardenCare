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
      		<img class="img-responsive img-thumbnail" src="<?php echo "../".$current_service["image"] ?>" alt="Chania">
      	</div>
    </div>
<?php require_once("../includes/footer.php"); ?>
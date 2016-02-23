<?php
    require_once("includes/data.php");
?>
<?php require_once("includes/header.php"); ?>
	<div class="panel panel-success shadow " >
        <div class="panel-heading">
            <img src="images/services.png">
            &nbsp;&nbsp;<secondheading class="secondheading">Services We Offer</secondheading> 	
        </div>
        <div class="panel-body" style="background-color: #f5f5f5;"> 
            <center><h1><i>#Things we good at</i></h1></center>            
            <hr class="line">
            <div class="row">
                <?php  
                    for( $i = 1 ; $i <= 11 ; $i++ ){
                        if($services_details[$services[$i]]['visible']==true){                        
                            echo "<div class=\"col-sm-4 col-md-3\">
                                    <div class=\"thumbnail shadow\">
                                        <img src=\"{$services_details[$services[$i]]['image']}\" alt=\"Picture{$i}\">
                                        <div class=\"caption\">
                                            <center><a class=\"heading_link\" href=\"services/selected_service.php?service_name={$services[$i]}\"><h3>{$services_details[$services[$i]]['name']}</h3></a>
                                            <p>{$services_details[$services[$i]]['short_description']}</p>
                                            <p><a href=\"{$services_details[$services[$i]]['url']}\" class=\" btn-shadow btn btn-success\" role=\"button\"><b>Read More</b></a>
                                            </p></center>
                                        </div>
                                    </div>
                                </div> ";
                        }
                    }
                ?>            
            </div>
            <a class="btn btn-lg btn-success" style="margin-left: 2%;" href="contact_us.php">
                <span class="glyphicon glyphicon-chevron-right"></span>&nbsp;Get a free quote
            </a>
        </div>          
    </div> 
<?php require_once("includes/footer.php"); ?>    	
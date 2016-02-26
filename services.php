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
                            echo "<div class=\"col-sm-4 col-md-4\">
                                    <div class=\"thumbnail shadow\">
                                        <img class=\"thumbnail_image\" src=\"{$services_details[$services[$i]]['image']}\" alt=\"Picture{$i}\">
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
                <div class="col-sm-4 col-md-4">
                    <div class="thumbnail shadow" style="min-height: 19.5em;">
                        
                            <h2><span class="glyphicon glyphicon-chevron-right"><a style="margin-top: 2%;" href="contact_us.php"></span>&nbsp;Get a free quote</a></h2>
                        
                        <div class="conatiner col-lg-12">
                            <p style="padding: 0.5em;">Contact us to arrange a visit when we will provide a free, no obligation quote for your landscaping and design requirements.</p>
                            <a href="contact_us.php"><h3 align="right">Contact<span class="glyphicon glyphicon-play"></span></h3></a>
                        </div>
                    </div> 
                </div>            
            </div>
            
        </div>          
    </div> 
<?php require_once("includes/footer.php"); ?>    	
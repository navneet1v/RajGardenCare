<?php
    require_once("includes/functions.php");  
    require_once("includes/header.php"); 
?>
<?php
    if(isset($_GET["message"])){
        $val = $_GET["message"] ;
        if($val == 2){
            successMessage("Free quotation request is successful.");
        }else if ($val == 0){
            infoMessage("Free quotation request is unsuccessful. Please make it again.");
        }else if($val == 1){
            warningMessage("Some fields are not filled properly. The fields could be name, suburb or email.");
        }
    }
?>
<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script>    
    var var_marker=null;
    function init_map() {
        var var_location = new google.maps.LatLng(-33.812711, 151.019275);
        var contentString = "Raj Garden Care";
        var var_mapoptions = {
            center: var_location,
            zoom: 15        
        };

        var_marker = new google.maps.Marker({
            position: var_location,
            map: var_map,                    
            title:"Raj Garden Care"
        });        

        var var_map = new google.maps.Map(document.getElementById("map-container"),var_mapoptions);        
        var_marker.setMap(var_map); 

        var infowindow = new google.maps.InfoWindow({
            content: contentString
        });

        var_marker.addListener('click', function() {
            infowindow.open(var_map, var_marker);
        });
    }

  google.maps.event.addDomListener(window, 'load', init_map);
</script> 

	<div class="panel panel-success" style="box-shadow: 10px 10px #A4BD9E;" >
        <div class="panel-heading">
            <img src="images/telephone46.png">
            &nbsp;&nbsp;<secondheading class="secondheading">Contact Information</secondheading> 	
        </div>
        <div class="panel-body" style="background-color: #f5f5f5;"> 
            <div class="conatiner col-lg-6">
                <h4>Address</h4>                
                <p>71 Thomas Street<br>
                Parramatta, 2150<br>
                </p>
                <hr class="service_line">
                <h4>Phone</h4>
                <p>                    
                    <abbr title="Phone"><span class="glyphicon glyphicon-phone"></span>&nbsp;0468 465 004</abbr>
                </p>
                <hr class="service_line">
                <h4>Email</h4>
                <p>
                    <span class="glyphicon glyphicon-envelope"></span>&nbsp;rajgardencare@gmail.com <br>
                </p>                
                <hr class="service_line">
                <h4 style="margin-top: 1em;">Find us here</h4>
                <div id="map-container" class="col-lg-12 col-lg-12 col-md-12 col-sm-12 col-xs-12" style="position: relative; overflow: hidden; transform: translateZ(0px); background-color: rgb(229, 227, 223); margin-bottom:5%;"></div>                
            </div>
            <div class="conatiner col-lg-6 col-sm-12 col-xs-12 col-md-8">
                <div class="container col-lg-9 col-lg-offset-2" style="background-color: #DEFFD6;">
                    <h2>Request a free quote</h2><br>
                    <form class="form-horizontal <?php 
                                    if(isset($_GET["message"])){ 
                                        if($_GET["message"] == 2)
                                            echo " hidden";
                                    }   
                                ?> 
                    " role="form" style="margin-bottom: 1em;" action="quotation.php" method="POST">
                        <div class="form-group">                        
                            <div class="col-sm-10">
                              <input type="text" name="name" class="form-control" id="Name" placeholder="Name" required>
                            </div>
                        </div>                        
                        <div class="form-group" >      
                            <div class="col-sm-10">
                              <input type="phone" name="phone" class="form-control" id="phone" placeholder="Contact Phone" required>
                            </div>
                        </div>
                        <div class="form-group">     
                            <div class="col-sm-10">
                              <input type="email" name="email" class="form-control" id="email" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="form-group">      
                            <div class="col-sm-10">
                              <input type="text" name="suburb" class="form-control" required id="suburb" placeholder="Suburb">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-10">
                                <label for="service">Select a Service</label>
                                <select class="form-control" id="service" name="service">
                                    <option>Lawn Mowning</option>                                    
                                    <option>Mulching</option>
                                    <option>Hedging</option>
                                    <option>Land Scaping</option>
                                </select>
                            </div>  
                        </div>
                        <div class="form-group">      
                            <div class="col-sm-10">
                              <textarea class="form-control" name="comments" placeholder="Comments" rows="5" id="comment"></textarea>
                            </div>
                        </div>
                        <button type="submit" id="submit" name="send_quote" class="btn btn-success btn-lg">
                            <span class="glyphicon glyphicon-chevron-right"></span>&nbsp;Send
                        </button>
                    </form>                                
                </div>                
                <div class="container col-lg-9 col-lg-offset-2">                
                    <h4>Trading Hours</h4>
                    <p>Monday - Saturday<br>7am to 6pm<br>Sunday<br>8am to 5pm</p>
                </div>
            </div>            	
        </div>
      </div>
    </div>      
<?php require_once("includes/footer.php"); ?> 
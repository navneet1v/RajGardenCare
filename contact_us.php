<?php require_once("includes/header.php"); ?>
<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script>    
  function init_map() {
    var var_location = new google.maps.LatLng(-33.812711, 151.019275);

    var var_mapoptions = {
      center: var_location,
      zoom: 15
    };

    var var_marker = new google.maps.Marker({
        position: var_location,
        map: var_map,
        title:"Venice"});

    var var_map = new google.maps.Map(document.getElementById("map-container"),
        var_mapoptions);

    var_marker.setMap(var_map); 

  }

  google.maps.event.addDomListener(window, 'load', init_map);
</script> 

		
	<div class="panel panel-success" style="box-shadow: 10px 10px #A4BD9E;" >
        <div class="panel-heading">
            <img src="images/telephone46.png">
            &nbsp;&nbsp;<secondheading class="secondheading">Contact Us</secondheading> 	
        </div>
        <div class="panel-body" style="background-color: #f5f5f5;">             	
    		<div class="container">
                <center>
                    <div class="polaroid" style="padding:1%;">                            
                        <!-- <img src="images/owner1.jpg" class="img-circle img-responsive" alt="Owner" width="304" height="236"> -->                            
                        <h4>Raj Garden Care</h4><span class="glyphicon glyphicon-envelope"></span>&nbsp;rajgardencare@gmail.com <br>                            
                        <span class="glyphicon glyphicon-phone"></span>&nbsp;+61-452427886<br>
                        <span class="glyphicon glyphicon-phone"></span>&nbsp;+61-468465004
                    </div>
                </center>
            </div>
            <div class="container" style="margin-top:3%;">                                 
                <div id="map-container" class="col-md-6"></div>                                                
                    <div class="polaroid" style="padding:1%; float:right; margin-right:14%; margin-top:2%;">    
                        <h2><b>Looking for us ?</b></h2>
                        <h3>Visit Us At </h3>
                        <address style="font-size:15px;">
                            <strong><h4>Raj Garden Care</h4></strong>
                            71 Thomas Street<br>
                            Parramatta 2150<br>
                            <abbr title="Phone">P: +61-452427886<br></abbr> 
                            <abbr title="Phone">P: +61-468465004</abbr>                         
                        </address> 
                    </div>               
                
            </div>
        </div>
      </div>
    </div>      
<?php require_once("includes/footer.php"); ?> 
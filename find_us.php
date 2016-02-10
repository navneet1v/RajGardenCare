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
	<div class="panel panel-success " style="box-shadow: 10px 10px #A4BD9E;" >
        <div class="panel-heading">
            <img src="images/find_us.png">
            &nbsp;&nbsp;<secondheading class="secondheading">Find Us</secondheading> 	
        </div>
        <div class="panel-body" style="background-color: #f5f5f5;">                             
    		<div class="container">                    
                <div id="map-container" style="height:300px; float:left; " class="col-md-6"></div>                
            <div class="container col-lg-offset-7">     
            <h2>Looking for us ?</h2>
            <h3>Visit Us At </h3>
                <address style="font-size:15px;">
                    <strong>Raj Garden Care</strong><br>
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
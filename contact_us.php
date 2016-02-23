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
                    <span class="glyphicon glyphicon-phone"></span>&nbsp;0452427886<br>
                    <span class="glyphicon glyphicon-phone"></span>&nbsp;0468465004
                </p>
                <hr class="service_line">
                <h4>Email</h4>
                <p>
                    <span class="glyphicon glyphicon-envelope"></span>&nbsp;rajgardencare@gmail.com <br>
                </p>                
                <hr class="service_line">
                <h4 style="margin-top: 1em;">Find us here</h4>
                <div id="map-container" class="col-lg-12"></div>                
            </div>
            <div class="conatiner col-lg-6">
                <div class="container col-lg-9 col-lg-offset-2" style="background-color: #DEFFD6;">
                    <h2>Request a free quote</h2><br>
                    <form class="form-horizontal <?php 
                                    if(isset($_POST["submit"])){ 
                                        echo " hidden";
                                    }   
                                ?> 
                    " role="form" style="margin-bottom: 1em;" action="" method="POST">
                        <div class="form-group">                        
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="Name" placeholder="Name" required>
                            </div>
                        </div>                        
                        <div class="form-group" >      
                            <div class="col-sm-10">
                              <input type="phone" class="form-control" id="phone" placeholder="Contact Phone" required>
                            </div>
                        </div>
                        <div class="form-group">     
                            <div class="col-sm-10">
                              <input type="email" class="form-control" id="email" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="form-group">      
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="suburb" placeholder="Suburb">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-10">
                                <label for="service">Select a Service</label>
                                <select class="form-control" id="service">
                                    <option>Lawn Mowning</option>                                    
                                    <option>Mulching</option>
                                    <option>Hedging</option>
                                    <option>Land Scaping</option>
                                </select>
                            </div>  
                        </div>
                        <div class="form-group">      
                            <div class="col-sm-10">
                              <textarea class="form-control" placeholder="Comments" rows="5" id="comment"></textarea>
                            </div>
                        </div>
                        <button type="submit" id="submit" name="submit" class="btn btn-success btn-lg">
                            <span class="glyphicon glyphicon-chevron-right"></span>&nbsp;Send
                        </button>
                    </form>                                
                </div>                
                <div class="container col-lg-9 col-lg-offset-2">                
                    <h4>Trading Hours</h4>
                    <p>Monday - Saturday<br>7am to 7pm<br>Sunday<br>8am to 7pm</p>
                </div>
            </div>            	
        </div>
      </div>
    </div>      
<?php require_once("includes/footer.php"); ?> 
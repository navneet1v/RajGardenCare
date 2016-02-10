<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <?php 
            $number_of_images = 6;
            for($i=1; $i<= $number_of_images; $i++){
                echo "<li data-target=\"#myCarousel\" data-slide-to=\"{$i}\"></li>";
            }
        ?>    
    </ol>

<!-- Wrapper for slides -->
    <div class="carousel-inner " role="listbox">
        <div class="item active">
            <img src="images/Pic1.jpg" alt="Pic1">      
        </div>
        <?php 
            $number_of_images = 6;
            for($i=2; $i<= $number_of_images; $i++){
                echo "\n<div class=\"item\">
                    <img src=\"images/Pic{$i}.jpg\" alt=\"Pic{$i}\">      
                </div>\n";
            }
        ?>
    </div>

  <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
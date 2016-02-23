<div id="myCarousel" class="carousel slide" data-ride="carousel">
<!-- Wrapper for slides -->
    <div class="carousel-inner " role="listbox">
        <div class="item active">
            <img src="images/Pic1.jpg" alt="Pic1">      
        </div>
        <?php 
            $number_of_images = 10;
            for($i=2; $i<= $number_of_images; $i++){
                echo "\n<div class=\"item\">
                    <img src=\"images/Pic{$i}.jpg\" alt=\"Pic{$i}\">      
                </div>\n";
            }
        ?>
    </div>
</div>
<div id="myCarousel" class="carousel slide" data-ride="carousel" style="height:5%;">
<!-- Wrapper for slides -->
    <div class="carousel-inner " role="listbox">
        <div class="item active">
            <img src="images/Pic7.jpg" alt="Pic1">      
        </div>
        <?php 
            $number_of_images = 6;            
            for($i=2; $i<= $number_of_images; $i++){
                $index = 6 + $i;
                echo "\n<div class=\"item\">
                    <img src=\"images/Pic{$index}.jpg\" alt=\"Pic{$i}\">      
                </div>\n";
            }
        ?>
    </div>
</div>
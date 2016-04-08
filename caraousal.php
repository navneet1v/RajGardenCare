<?php
$images = array('Pic12.jpg', 'Pic16.jpg', 'new_turf.jpg', 'garden_bed_installation.jpg', 'Pic17.jpg', 'Pic6.jpg', 'Pic20.jpg', 'Pic18.jpg', 'land_scaping.jpg', 'Pic19.jpg');
?>
<div id="myCarousel" class="carousel slide" data-ride="carousel" style="height:5%;">
<!-- Wrapper for slides -->
    <div class="carousel-inner " role="listbox">
        <div class="item active">
            <img src="images/Pic12.jpg" alt="Pic1">      
        </div>
        <?php 
            $number_of_images = 7;            
            for($i=2; $i<= $number_of_images; $i++){                
                $img = $images[$i-1];
                echo "\n<div class=\"item\">
                    <img src=\"images/{$img}\" alt=\"Pic{$i}\">      
                </div>\n";
            }
        ?>
    </div>
</div>
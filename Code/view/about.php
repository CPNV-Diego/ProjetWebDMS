<?php
/**
 * Users: Simão Henriques da Silva / Diego Pinto Tomaz / Marcos Valente da Silva
 * File : about.php
 */

// tampon de flux stocké en mémoire
ob_start();
$title="DMS - About";
?>
<!-- about section start -->
<div class="about_section layout_padding">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
            </div>
            <div class="col-md-6">
                <h1 class="about_taital">About company</h1>
                <div class="border"></div>
                <p class="about_text">Small company selling shoes</p>
                <div class="read_bt_1"><a href="#">Read More</a></div>
                <div class="image_1"><img src="view/images/img-1.png"></div>
            </div>
        </div>
    </div>
</div>
<!-- about section end -->
<?php
//tampon de flux vidé de la mémoire
$content = ob_get_clean();
//appelle le fichier gabarit.php
require "gabarit.php";
<?php
/**
 * Created by PhpStorm.
 * User: Pascal.BENZONANA
 * Date: 08.05.2017
 * Time: 09:16
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
                <div><img src="view/images/about-img.png" class="about_img"></div>
            </div>
            <div class="col-md-6">
                <h1 class="about_taital">About company</h1>
                <div class="border"></div>
                <p class="about_text">consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitationconsectetur adipiscing </p>
                <div class="read_bt_1"><a href="#">Read More</a></div>
                <div class="image_1"><img src="view/images/img-1.png"></div>
            </div>
        </div>
    </div>
</div>
<!-- about section end -->
<?php
$content = ob_get_clean();
require "gabarit.php";
<?php
/**
 * Users: Simão Henriques da Silva / Diego Pinto Tomaz / Marcos Valente da Silva
 * File : blog.php
 */
// tampon de flux stocké en mémoire
ob_start();
$title="DMS - Blog";
?>
<!-- Blog section start -->
<div class="blog_section layout_padding">
    <div class="container">
        <h1 class="blog_taital">Latest Blog</h1>
        <div class="blog_section_2">
            <div class="row">
                <div class="col-md-5">
                    <div class="face_img"><img src="view/images/face-img.png" class="face_img"></div>
                </div>
                <div class="col-md-7">
                    <h1 class="face_text">Face Cream Very mosurations</h1>
                    <p class="lorem_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laborisLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis</p>
                    <div class="read_bt_1"><a href="#">Read More</a></div>
                </div>
            </div>
        </div>
        <div class="blog_section_3">
            <div class="row">
                <div class="col-md-7">
                    <h1 class="face_text">Face Cream Very mosurations Skin</h1>
                    <p class="lorem_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laborisLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis</p>
                    <div class="readmore_bt"><a href="#">Read More</a></div>
                </div>
                <div class="col-md-5">
                    <div class="face_img"><img src="view/images/face-img1.png" class="face_img"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog section end -->
<?php
$content = ob_get_clean();
require "gabarit.php";
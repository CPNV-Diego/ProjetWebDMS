<?php
/**
 * Created by PhpStorm.
 * User: Pascal.BENZONANA
 * Date: 08.05.2017
 * Time: 09:16
 */

// tampon de flux stocké en mémoire
ob_start();
$title="DMS - Accueil";
?>
    <!-- product section start -->
    <div class="product_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="product_taital">Products</h1>
                    <p class="product_text">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="image_main"><img src="images/img-2.png" alt="image" /></div>
                            <h6 class="price_text">Price <br><span style="color: #f75261;">$10</span></h6>
                        </div>
                        <div class="item">
                            <div class="image_main"><img src="images/img-2.png" alt="image" /></div>
                            <h6 class="price_text">Price <br><span style="color: #f75261;">$10</span></h6>
                        </div>
                        <div class="item">
                            <div class="image_main"><img src="images/img-2.png" alt="image" /></div>
                            <h6 class="price_text">Price <br><span style="color: #f75261;">$10</span></h6>
                        </div>
                        <div class="item">
                            <div class="image_main"><img src="images/img-2.png" alt="image" /></div>
                            <h6 class="price_text">Price <br><span style="color: #f75261;">$10</span></h6>
                        </div>
                        <div class="item">
                            <div class="image_main"><img src="images/img-2.png" alt="image" /></div>
                            <h6 class="price_text">Price <br><span style="color: #f75261;">$10</span></h6>
                        </div>
                        <div class="item">
                            <div class="image_main"><img src="images/img-2.png" alt="image" /></div>
                            <h6 class="price_text">Price <br><span style="color: #f75261;">$10</span></h6>
                        </div>
                        <div class="item">
                            <div class="image_main"><img src="images/img-2.png" alt="image" /></div>
                            <h6 class="price_text">Price <br><span style="color: #f75261;">$10</span></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- product section start -->
    <!-- client section start -->
    <div class="client_section layout_padding banner_bg">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h1 class="client_taital">Customers Says</h1>
                </div>
                <div class="col-md-9">
                    <div class="client_box">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <p class="client_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laborisLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</p>
                                    <div class="client_main">
                                        <div class="client_left">
                                            <div class="client_img"><img src="images/client-img.png"></div>
                                        </div>
                                        <div class="client_right">
                                            <div class="quick_icon"><img src="images/quick-icon.png"></div>
                                            <h6 class="client_name">Uliya Hindd</h6>
                                            <p class="aliqua_text">Aliqua. Ut enim</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <p class="client_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laborisLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</p>
                                    <div class="client_main">
                                        <div class="client_left">
                                            <div class="client_img"><img src="images/client-img.png"></div>
                                        </div>
                                        <div class="client_right">
                                            <div class="quick_icon"><img src="images/quick-icon.png"></div>
                                            <h6 class="client_name">Uliya Hindd</h6>
                                            <p class="aliqua_text">Aliqua. Ut enim</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <p class="client_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laborisLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</p>
                                    <div class="client_main">
                                        <div class="client_left">
                                            <div class="client_img"><img src="images/client-img.png"></div>
                                        </div>
                                        <div class="client_right">
                                            <div class="quick_icon"><img src="images/quick-icon.png"></div>
                                            <h6 class="client_name">Uliya Hindd</h6>
                                            <p class="aliqua_text">Aliqua. Ut enim</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- client section end -->
<?php
$content = ob_get_clean();
require "gabarit.php";
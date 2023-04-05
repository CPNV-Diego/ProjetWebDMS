<?php
/**
 * Users: Simão Henriques da Silva / Diego Pinto Tomaz / Marcos Valente da Silva
 * File : gabarit.php
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- basic -->
    <meta charset="utf-8">
    <title><?= $title; ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>DMS-Shoes</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="view/css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="view/css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="view/css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="view/images/fevicon.png" type="image/gif"/>
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="view/css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
    <!-- owl stylesheets -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.css" rel="stylesheet"/>
</head>
<body>
<!-- header section start -->
<div class="header_section">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="logo" href="index.php?action=home"><img src="view/images/logo-dms.png"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php?action=home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?action=about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?action=product">Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?action=contact">Contact</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <div class="login_menu">
                        <ul>
                            <?php if (!isset($_SESSION['email']) || (!isset($_GET['action'])) || (($_GET['action']=="logout"))) : ?>
                                <li><a href="index.php?action=register">Register</a></li>
                                <li><a href="index.php?action=login">Login</a></li>
                            <?php else : ?>
                                <li><a href="index.php?action=myAccount"><img src="view/images/user-icon.png"></a></li>
                                <li><a href="index.php?action=logout">Logout</a></li>
                                <li><a href="index.php?action=cart"><img src="view/images/trolly-icon.png"></a></li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </form>
            </div>
        </nav>
    </div>
</div>
<!-- header section end -->
<!-- banner section start -->
<?php if(isset($_GET['action'])) :?>
<?php if(($_GET['action']=="home")) :?>
                    <div class="carousel-item">
                        <div class="taital_main">
                            <div class="taital_left">
                                <h1 class="banner_taital">Deni Product For Skin</h1>
                                <div class="read_bt"><a href="index.php?action=product">Read More</a></div>
                            </div>
                            <div class="taital_right">
                                <div class="product_img"><img src="view/images/product-img.png"></div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="taital_main">
                            <div class="taital_left">
                                <h1 class="banner_taital">Deni Product For Skin</h1>
                                <div class="read_bt"><a href="index.php?action=product">Read More</a></div>
                            </div>
                            <div class="taital_right">
                                <div class="product_img"><img src="view/images/product-img.png"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- banner section end -->
    <?php endif; ?>
<?php endif; ?>
<div>
    <?= $content; ?>
</div>
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
                                <p class="client_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laborisLorem ipsum dolor sit amet, consectetur
                                    adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</p>
                                <div class="client_main">
                                    <div class="client_left">
                                        <div class="client_img"><img src="view/images/client-img.png"></div>
                                    </div>
                                    <div class="client_right">
                                        <div class="quick_icon"><img src="view/images/quick-icon.png"></div>
                                        <h6 class="client_name">Uliya Hindd</h6>
                                        <p class="aliqua_text">Aliqua. Ut enim</p>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <p class="client_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laborisLorem ipsum dolor sit amet, consectetur
                                    adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</p>
                                <div class="client_main">
                                    <div class="client_left">
                                        <div class="client_img"><img src="view/images/client-img.png"></div>
                                    </div>
                                    <div class="client_right">
                                        <div class="quick_icon"><img src="view/images/quick-icon.png"></div>
                                        <h6 class="client_name">Uliya Hindd</h6>
                                        <p class="aliqua_text">Aliqua. Ut enim</p>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <p class="client_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laborisLorem ipsum dolor sit amet, consectetur
                                    adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</p>
                                <div class="client_main">
                                    <div class="client_left">
                                        <div class="client_img"><img src="view/images/client-img.png"></div>
                                    </div>
                                    <div class="client_right">
                                        <div class="quick_icon"><img src="view/images/quick-icon.png"></div>
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
<!-- footer section start -->
<div class="footer_section layout_padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="location_icon">
                    <ul>
                        <li><a href="#"><img src="view/images/map-icon.png"></a></li>
                        <li><a href="#"><img src="view/images/mail-icon.png"></a></li>
                        <li><a href="#"><img src="view/images/call-icon.png"></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="mail_box">
                    <textarea class="enter_email_text" placeholder="Enter Your Email" rows="5" id="comment"
                              name="Message"></textarea>
                    <div class="subscribe_bt_1"><a href="#">Subscribe</a></div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="social_icon">
                    <ul>
                        <li><a href="#"><img src="view/images/fb-icon.png"></a></li>
                        <li><a href="#"><img src="view/images/twitter-icon.png"></a></li>
                        <li><a href="#"><img src="view/images/linkedin-icon.png"></a></li>
                        <li><a href="#"><img src="view/images/instagram-icon.png"></a></li>
                        <li><a href="#"><img src="view/images/youtub-icon.png"></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer_section_2">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <h3 class="company_text">Product</h3>
                    <p class="dolor_text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque
                        volutpat mattis eros.Lorem ipsum dolor sit amet, </p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h3 class="company_text">Shop</h3>
                    <p class="dolor_text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque
                        volutpat mattis eros.Lorem ipsum dolor sit amet, </p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h3 class="company_text">Company</h3>
                    <p class="dolor_text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque
                        volutpat mattis eros.Lorem ipsum dolor sit amet, </p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h3 class="company_text">MY ACCOUNT</h3>
                    <p class="dolor_text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque
                        volutpat mattis eros.Lorem ipsum dolor sit amet, </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- footer section end -->
<!-- copyright section start -->
<div class="copyright_section">
    <div class="container">
        <p class="copyright_text">© 2020 All Rights Reserved.<a href="https://htmsrcl.design"> Free html Templates</a>
        </p>
    </div>
</div>
<!-- copyright section end  -->
<!-- Javascript files-->
<script src="view/js/jquery.min.js"></script>
<script src="view/js/popper.min.js"></script>
<script src="view/js/bootstrap.bundle.min.js"></script>
<script src="view/js/jquery-3.0.0.min.js"></script>
<script src="view/js/plugin.js"></script>
<!-- sidebar -->
<script src="view/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="view/js/custom.js"></script>
<!-- javascript -->
<script src="view/js/owl.carousel.js"></script>
<!-- owl carousel -->
<script>
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 30,
        nav: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 4
            }
        }
    })
</script>
</body>
</html>
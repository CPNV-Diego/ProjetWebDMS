<!DOCTYPE html>
<html lang="en">
<head>
    <!-- basic -->
    <meta charset="utf-8">
    <title><?=$title;?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Deni</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
    <!-- owl stylesheets -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.css" rel="stylesheet" />
</head>
<body>
<!-- header section start -->
<div class="header_section">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="logo" href="home.php"><img src="images/logo.png"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="apropos.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="produit.php">Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="blog.php">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <div class="login_menu">
                        <ul>
                            <li><a href="#">Login</a></li>
                            <li><a href="#"><img src="images/user-icon.png"></a></li>
                            <li><a href="#"><img src="images/trolly-icon.png"></a></li>
                            <li><a href="#"><img src="images/search-icon.png"></a></li>
                        </ul>
                    </div>
                </form>
            </div>
        </nav>
    </div>
</div>
<!-- header section end -->
<!-- banner section start -->
<?php if((@$_GET['action']=="home")||(!isset($_GET['action']))) :?>
<div class="banner_section banner_bg">
    <div class="container-fluid">
        <div id="my_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="taital_main">
                        <div class="taital_left">
                            <h1 class="banner_taital">Deni Product For Skin</h1>
                            <div class="read_bt"><a href="#">Read More</a></div>
                        </div>
                        <div class="taital_right">
                            <div class="product_img"><img src="images/product-img.png"></div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="taital_main">
                        <div class="taital_left">
                            <h1 class="banner_taital">Deni Product For Skin</h1>
                            <div class="read_bt"><a href="#">Read More</a></div>
                        </div>
                        <div class="taital_right">
                            <div class="product_img"><img src="images/product-img.png"></div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="taital_main">
                        <div class="taital_left">
                            <h1 class="banner_taital">Deni Product For Skin</h1>
                            <div class="read_bt"><a href="#">Read More</a></div>
                        </div>
                        <div class="taital_right">
                            <div class="product_img"><img src="images/product-img.png"></div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#my_slider" role="button" data-slide="prev">
                <i class='fa fa-arrow-up'></i>
            </a>
            <a class="carousel-control-next" href="#my_slider" role="button" data-slide="next">
                <i class='fa fa-arrow-down'></i>
            </a>
        </div>
    </div>
</div>
<!-- banner section end -->
<?php endif; ?>
<!-- about section start -->
<div class="about_section layout_padding">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div><img src="images/about-img.png" class="about_img"></div>
            </div>
            <div class="col-md-6">
                <h1 class="about_taital">About company</h1>
                <div class="border"></div>
                <p class="about_text">consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitationconsectetur adipiscing </p>
                <div class="read_bt_1"><a href="#">Read More</a></div>
                <div class="image_1"><img src="images/img-1.png"></div>
            </div>
        </div>
    </div>
</div>
<!-- about section end -->
<div>
    <?=$content; ?>
</div>
<!-- contact section start -->
<div class="contact_section layout_padding">
    <div class="container-fluid">
        <h1 class="contact_taital">Contact Us</h1>
        <div class="contact_section_2">
            <div class="row">
                <div class="col-md-6">
                    <div class="image_7"><img src="images/img-7.png"></div>
                </div>
                <div class="col-md-6">
                    <div class="mail_section_1">
                        <input type="text" class="mail_text" placeholder="Your Name" name="Your Name">
                        <input type="text" class="mail_text" placeholder="Phone Number" name="Phone Number">
                        <input type="text" class="mail_text" placeholder="Email" name="Email">
                        <textarea class="massage-bt" placeholder="Massage" rows="5" id="comment" name="Massage"></textarea>
                        <div class="send_bt"><a href="#">SEND</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- contact section end -->
<!-- footer section start -->
<div class="footer_section layout_padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="location_icon">
                    <ul>
                        <li><a href="#"><img src="images/map-icon.png"></a></li>
                        <li><a href="#"><img src="images/mail-icon.png"></a></li>
                        <li><a href="#"><img src="images/call-icon.png"></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="mail_box">
                    <textarea class="enter_email_text" placeholder="Enter Your Email" rows="5" id="comment" name="Message"></textarea>
                    <div class="subscribe_bt_1"><a href="#">Subscribe</a></div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="social_icon">
                    <ul>
                        <li><a href="#"><img src="images/fb-icon.png"></a></li>
                        <li><a href="#"><img src="images/twitter-icon.png"></a></li>
                        <li><a href="#"><img src="images/linkedin-icon.png"></a></li>
                        <li><a href="#"><img src="images/instagram-icon.png"></a></li>
                        <li><a href="#"><img src="images/youtub-icon.png"></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer_section_2">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <h3 class="company_text">Product</h3>
                    <p class="dolor_text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros.Lorem ipsum dolor sit amet, </p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h3 class="company_text">Shop</h3>
                    <p class="dolor_text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros.Lorem ipsum dolor sit amet, </p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h3 class="company_text">Company</h3>
                    <p class="dolor_text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros.Lorem ipsum dolor sit amet, </p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h3 class="company_text">MY ACCOUNT</h3>
                    <p class="dolor_text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros.Lorem ipsum dolor sit amet, </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- footer section end -->
<!-- copyright section start -->
<div class="copyright_section">
    <div class="container">
        <p class="copyright_text">© 2020 All Rights Reserved.<a href="https://html.design"> Free html Templates</a></p>
    </div>
</div>
<!-- copyright section end  -->
<!-- Javascript files-->
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/jquery-3.0.0.min.js"></script>
<script src="js/plugin.js"></script>
<!-- sidebar -->
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/custom.js"></script>
<!-- javascript -->
<script src="js/owl.carousel.js"></script>
<!-- owl carousel -->
<script>
$('.owl-carousel').owlCarousel({
        loop:true,
        margin:30,
        nav:true,
        responsive:{
    0:{
        items:1
            },
            600:{
        items:3
            },
            1000:{
        items:4
            }
        }
    })
</script>
</body>
</html>
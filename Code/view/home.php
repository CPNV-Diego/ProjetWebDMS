<?php
/**
 * Users: Simão Henriques da Silva / Diego Pinto Tomaz / Marcos Valente da Silva
 * File : home.php
 */

// tampon de flux stocké en mémoire
ob_start();
$title = "DMS - Accueil";
?>
    <!-- product section start -->
    <div class="product_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="product_taital">Nos Produits Recommander</h1>
                    <p class="product_text">Des chaussures Nike , Adidas , New Balance , Yeezy , ou même Air Jordan !</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel owl-theme">
                        <?php
                        for ($i = 0; $i < $countProduct; $i++) { ?>
                            <div class="item">
                                <div class="image_main"><img src="<?= $productImage[$i]?>" alt="image"/></div>
                                <h6 class="price_text"><?= $productPrice[$i] ?> <br><span style="color: #f75261;"><?= $productName[$i] ?><br><?= $productBrand[$i] ?></span>
                                </h6>
                            </div>
                        <?php } ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- product section start -->

<?php
$content = ob_get_clean();
require "gabarit.php";
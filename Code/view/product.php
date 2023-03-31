<?php

/**
 * Users: Simão Henriques da Silva / Diego Pinto Tomaz / Marcos Valente da Silva
 * File : product.php
 */

// tampon de flux stocké en mémoire
ob_start();
$title = "DMS - Product";
?>
    <!-- product section start -->
    <div class="product_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <h1 class="product_taital">Nos produits</h1>
                    <p class="product_text"></p>
                </div>
            </div>
            <?php
            for ($i = 0;$i < $countProduct;$i++) { ?>
            <div class="row">
                <div class="col-md-12">
                    <div class="item">
                        <div class="imageProduit"><img src="<?= $productImage[$i]?> " />
                        <h6 class="price_text"><?= $productPrice[$i] ?> <br><span style="color: #f75261;"><?= $productName[$i] ?><br><?= $productBrand[$i] ?></span>
                        </h6>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
<?php
//tampon de flux vidé de la mémoire
$content = ob_get_clean();
//appelle le fichier gabarit.php
require "gabarit.php";

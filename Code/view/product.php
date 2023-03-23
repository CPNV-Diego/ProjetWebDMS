<?php
/**
 * Created by PhpStorm.
 * User: Pascal.BENZONANA
 * Date: 08.05.2017
 * Time: 09:16
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

                    <h1 class="product_taital">Recommended</h1>
                    <p class="product_text">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                        enim</p>
                </div>
            </div>
            <?php for ($i = 0;
            $i < count($products);
            $i++) { ?>

            <div class="row">
                <div class="col-md-12">
                    <div class="item">
                        <div class="image_main"><img src="view/images/img-2.png" alt="image"/></div>
                        <h6 class="price_text"><?= $productPrice[$i] ?> <br><span style="color: #f75261;"><?= $productName[$i] ?><br><?= $productBrand[$i] ?></span>
                        </h6>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
<?php
$content = ob_get_clean();
require "gabarit.php";

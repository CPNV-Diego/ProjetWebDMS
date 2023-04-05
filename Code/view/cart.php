<?php

/**
 * Users: Simão Henriques da Silva / Diego Pinto Tomaz / Marcos Valente da Silva
 * File : cart.php
 */

// Cela vérifie la variable de session "cart".
// Si elle n'est pas vide ça calcule le prix total des produits dans le panier en multipliant la quantité de chaque produit par son prix
// et cela ajoute les résultats dans la variable "total_price".
if(isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
    $total_price = 0;
    foreach ($_SESSION['cart'] as $product) {
        $total_price += $product['quantity'] * $product['product']['price'];
    }
}
// tampon de flux stocké en mémoire
ob_start();
?>
    <div>
        <?php if (!isset($_SESSION['cart']) || empty($_SESSION['cart'])): ?>
            <h2>Votre panier est vide !</h2>
        <?php else: ?>
        <h2>Votre panier</h2>
        <table class="table">
            <thead>
            <tr>
                <th class="col">Produit</th>
                <th class="col">Prix unitaire</th>
                <th class="col">Quantité</th>
                <th class="col">Prix total</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($_SESSION['cart'] as $product): ?>
                <tr>
                    <td><?= $product['product']['name'] ?></td>
                    <td><?= $product['product']['price'] ?> CHF</td>
                    <td><?= $product['quantity'] ?></td>
                    <td><?= $product['quantity'] * $product['product']['price'] ?> CHF</td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
        <p id="total">Total: <?= $total_price ?> CHF</p>
            <a href="?action=reset_cart" class="cart_btn">Reset cart</a>
            <a href="?action=reset_cart" onclick="alert('Votre achat a été effectué, nous vous avons envoyé un mail avec les détails.')" class="cart_btn">Buy</a>
        <?php endif; ?>
    </div>
<?php
//tampon de flux vidé de la mémoire
$content = ob_get_clean();
//appelle le fichier gabarit.php
require "gabarit.php";
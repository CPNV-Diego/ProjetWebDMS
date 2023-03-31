<?php

/**
 * Users: Simão Henriques da Silva / Diego Pinto Tomaz / Marcos Valente da Silva
 * File : trolley.php
 */

// tampon de flux stocké en mémoire
ob_start();
?>
    <div id="cart"><h2>Votre panier</h2>
        <table>
            <thead>
            <tr>
                <th>Produit</th>
                <th>Prix unitaire</th>
                <th>Quantité</th>
                <th>Prix total</th>
            </tr>
            </thead>
            <tbody></tbody>
        </table>
        <p id="total">Total: 0 €</p></div>
<?php
//tampon de flux vidé de la mémoire
$content = ob_get_clean();
//appelle le fichier gabarit.php
require "gabarit.php";
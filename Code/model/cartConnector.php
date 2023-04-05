<?php
/**
 * Users: Simão Henriques da Silva / Diego Pinto Tomaz / Marcos Valente da Silva
 * File : cartConnector.php
 */

/*
 * Cette fonction ajoute un produit au panier d'achat.
 * Elle vérifie si la variable de la session "cart" existe, sinon elle crée un tableau vide,
 * Après, elle parcourt le panier pour voir si le produit qui vous voulez ajouter y est déjà présent.
 * Si oui, elle ajoute simplement 1 à la quantité du produit existant.
 * Sinon, ça crée un ajoute un nouveau produit dans le panier,
 * Par la suite çA l'ajoute au tableau de panier.
 * A la fin la fonction renvoie 1 pour indiquer que l'ajout s'est bien déroulé.
 */
function add_product_to_cart($product){
    if(!isset($_SESSION['cart'])) $_SESSION['cart'] = array();

    $index_existing_product = -1;
    //checks if product already exists in cart
    foreach($_SESSION['cart'] as $key => $product_in_cart){
        if(in_array($product['name'], $product_in_cart['product'])) $index_existing_product = $key;
    }

    if($index_existing_product != -1){
        //add 1 to the qty
        $_SESSION['cart'][$index_existing_product]['quantity'] += 1;
        return 1;
    }

    $product_to_add = array(
        'product' => $product,
        'quantity' => 1
    );

    //adds the new product with a qty of it to the cart
    array_push($_SESSION['cart'], $product_to_add);

    return 1;
}
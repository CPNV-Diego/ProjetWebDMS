<?php
/**
 * Users: Simão Henriques da Silva / Diego Pinto Tomaz / Marcos Valente da Silva
 * File : productConnector.php
 */

function getProducts($exit){
/*
 * Cette fonction prend un paramètre $exit.
 * Elle lit le contenu du fichier JSON data/products.json,
 * le convertit en un objet PHP,
 * puis stocke les données de chaque produit dans des tableaux PHP.
 * Enfin, elle utilise une instruction switch pour déterminer quelle vue doit être chargée en fonction de la valeur de $exit.
 */
    $data = file_get_contents("data/products.json");

    $products = json_decode($data);
    $countProduct = count($products);
    for ($i = 0; $i < $countProduct; $i++) {

        $productImage[$i] = $products[$i]->image;

        $productName[$i] = $products[$i]->name;

        $productPrice[$i] = $products[$i]->price;

        $productBrand[$i] = $products[$i]->brand;

    }
    switch ($exit) {

        case 'home' :
            require "view/home.php";
            break;
        case 'product' :
            require "view/product.php";
            break;
    }
}
?>


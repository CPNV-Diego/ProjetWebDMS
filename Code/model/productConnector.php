<?php

function getProducts($exit){

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


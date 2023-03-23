<?php

function getProducts(){


    $data = file_get_contents("data/products.json");

    $products = json_decode($data);

    for ($i = 0; $i < count($products); $i++) {

        $productName[$i] = $products[$i]->name;

        $productPrice[$i] = $products[$i]->price;

        $productBrand[$i] = $products[$i]->brand;

    }
    require "view/product.php";
}
?>


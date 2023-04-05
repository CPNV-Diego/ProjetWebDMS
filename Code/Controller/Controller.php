<?php
/**
 * Users: Simão Henriques da Silva / Diego Pinto Tomaz / Marcos Valente da Silva
 * File : Controller.php
 */

require "model/dataRegister.php";

function home()
{
    require 'model/productConnector.php';
    //Appele la fonction getProducts dans le productConnector.php avec la case 'home'

    getProducts('home');
}
function about(){
    require "view/about.php";
}
function product(){
    require 'model/productConnector.php';
    //Appele la fonction getProducts dans le productConnector.php avec la case 'product'
    getProducts('product');
}
function contact(){
    require "view/contact.php";
}
function login(){
    require "view/login.php";
    //Récupèration de l'email et le mot de passe via le formulaire et appelle la fonction extractRegister en passant les données comme paramètres.
    $email = $_POST['inputEmailAddress'];
    $pwd = $_POST['inputPassword'];
    extractRegister($email,$pwd);
}
function lost(){
    require "view/lost.php";
}

function cart(){
    require "view/cart.php";
}

function add_to_cart($product_id){

    if(!isset($_SESSION['email'])){
        header('Location: ?action=product');
        return;
    }
    require "model/cartConnector.php";

    $data = file_get_contents("data/products.json");
    $product = json_decode($data,true)[$product_id];

    if(add_product_to_cart($product)){
        header("Location: ?action=cart");
    }
}

function reset_cart(){
    unset($_SESSION['cart']);
    header('Location: ?action=cart');
}
function myAccount(){
    require "view/myAccount.php";
}

function register(){
    require "view/register.php";
}


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
function blog(){
    require "view/blog.php";
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

function trolley(){
    require "view/trolley.php";
}

function myAccount(){
    require "view/myAccount.php";
}

function register(){
    require "view/register.php";
}

<?php
require "model/dataRegister.php";

function home()
{
    require "view/home.php";
}
function about(){
    require "view/about.php";
}
function product(){
    require 'model/productConnector.php';
    $products = getProducts();
    require "view/product.php";
}
function blog(){
    require "view/blog.php";
}
function contact(){
    require "view/contact.php";
}
function login(){
    require "view/login.php";
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

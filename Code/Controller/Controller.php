<?php
require "model/dataRegister.php";

function home()
{
    require 'model/productConnector.php';
    getProducts('home');
}
function about(){
    require "view/about.php";
}
function product(){
    require 'model/productConnector.php';
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

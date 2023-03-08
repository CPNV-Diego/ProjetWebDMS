<?php
require "model/dataRegister.php";

function home(){
    require "view/home.php";
}
function about(){
    require "view/about.php";
}
function product(){
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

function register($data)
{
    require "view/register.php";
    //Affiche les données, en renommant $_POST $data
    saveRegister($data);
    echo "données écrites sur le disque";
}
<?php
session_start();
require "Controller/Controller.php";

if (isset($_GET['action'])) {
    $action = $_GET['action'];
    switch ($action) {
        case 'home' :
            home();
            break;
        case 'about' :
            about();
            break;
        case 'product' :
            product();
            break;
        case 'blog'  :
            blog();
            break;
        case 'contact' :
            contact();
            break;
        case 'register' :
            register($_POST);
            break;
        case 'login' :
            login();
            break;
        default :
            lost();
    }
} else {
    home();
}
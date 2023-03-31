<?php

/**
 * Users: Simão Henriques da Silva / Diego Pinto Tomaz / Marcos Valente da Silva
 * File : index.php
 */

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
            register();
            break;
        case 'login' :
            login();
            break;
        case 'logout' :
            logout();
            break;
        case 'trolley' :
            trolley();
            break;
        case 'myAccount' :
            myAccount();
            break;
        default :
            lost();
    }
} else {
    home();
}
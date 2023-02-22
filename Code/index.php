<?php
session_start();
require "Controller/Controller.php";

if (isset($_GET['action'])) {
    $action = $_GET['action'];
    switch ($action) {
        case'home' :
            home();
            break;
        default :

    }

}
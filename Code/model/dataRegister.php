<?php
require "fileConnector.php";
//region Global variables
//endregion Global variables
/*function saveRegister($data)
{
    //Cette fonction crée un tableau et l'écrit dans le json comme une ligne
    $newRegisterToWrite = extractRegister($data);//crée tableau simple (non associatif)
    writeRegisterInJSON($newRegisterToWrite);
}*/

function extractUser($data)
{
    $emailAddress = $data['inputEmailAddress'];
    $password = $data['inputPassword'];

    $passwordHash = password_hash($password, PASSWORD_DEFAULT);
    return array($emailAddress, $passwordHash);

}

function saveRegister($data)
{

    //Cette fonction crée un tableau et l'écrit dans le json comme une ligne
    $newRegisterToWrite = extractUser($data);//crée tableau simple (non associatif)
    return registerUsers($newRegisterToWrite);
}


function IsLoginCorrect($post)
{
    $Accounts = json_decode(file_get_contents("data/register.json"), true);;

    if (isset($post['inputEmailAddress']) && isset($post['inputPassword'])) {


        foreach ($Accounts as $account) {
            if ($account['email'] == $post['inputEmailAddress']) {
                if (password_verify($post['inputPassword'], $account['password'])) {
                    $_SESSION['email'] = $post['inputEmailAddress'];
                    $_SESSION['password'] = $post['inputPassword'];
                    header('Location: index.php?action=home');
                    exit;
                }
            }
        }
    }
    if (!isset($_SESSION['email']) && !isset($_SESSION['password'])) {
        require_once 'view/login.php';
    }
}

function extractRegister($email, $pwd)
{


    $decode = file_get_contents("data/register.json");

    $obj = json_decode($decode);

    for ($i = 0; $i < count($obj); $i++) {
        if ($obj[$i]->email == $email) {
            if (password_verify($obj[$i]->password, $pwd)) {
                require "view/home.php";
                return;
            }
        }

    }
    return false;
}


function logout(): void
{
    $_SESSION = array();
    session_destroy();
    require "view/login.php";

}
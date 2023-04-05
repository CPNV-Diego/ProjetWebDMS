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
    /*
     * Cette fonction prend en entrée un tableau associatif avec une adresse e-mail
     * et un mot de passe et retourne un tableau contenant l'adresse e-mail et le hash du mot de passe.
     * Elle utilise la fonction password_hash pour hasher le mot de passe.
     */
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
    /*
     * Cette fonction prend en entrée un tableau associatif avec une adresse e-mail et un mot de passe.
     */

    $Accounts = json_decode(file_get_contents("data/register.json"), true);

    //vérification de l' e-mail et le mot de passe dans le fichier "register.json"
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

    //Si les informations de la session ne sont pas définies, elle affiche la page "view/login.php".
    if (!isset($_SESSION['email']) && !isset($_SESSION['password'])) {
        require_once 'view/login.php';
    }
}

function extractRegister($email, $pwd)
{
/*
 * Cette fonction prend en entrée une adresse e-mail et un mot de passe.
 * Elle lit les données d'un fichier JSON,
 * recherche une entrée avec l'adresse e-mail fournie et vérifie si le mot de passe fourni correspond.
 * Si l'adresse e-mail et le mot de passe correspondent, elle affiche la page d'accueil.
 * Sinon, elle retourne false.
 */

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
    /*
     * Cette fonction supprime toutes les variables de la session et détruit la session en cours,
     * Ensuite affiche la page de connexion.
     */
    $_SESSION = array();
    session_destroy();
    require "view/login.php";

}
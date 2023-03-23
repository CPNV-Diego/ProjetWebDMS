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
    return array($emailAddress, $password);
}

function saveRegister($data)
{
    //Cette fonction crée un tableau et l'écrit dans le json comme une ligne

    $newRegisterToWrite = extractUser($data);//crée tableau simple (non associatif)
    return registerUsers($newRegisterToWrite);
}


function controlLogin($data)
{
    $userToLogin = extractRegister($data);//crée tableau simple (non associatif)
    return checkIfUserExist($userToLogin);

}

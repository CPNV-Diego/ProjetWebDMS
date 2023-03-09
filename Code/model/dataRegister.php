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

function extractRegister()
{
    $emailAddress = $_POST['inputEmailAddress'];
    $password = $_POST['inputPassword'];

    $filename = 'data/register.json';

    //$data = file_get_contents($filename);
   //$users = json_decode($data,true);

    $users[] = array('username' => $emailAddress, 'password' => $password);

    file_put_contents($filename , json_encode($users));

   // $newRegisterTemp = array($emailAddress, $password);
   // return $newRegisterTemp;
}

function saveRegister($data)
{
    //Cette fonction crée un tableau et l'écrit dans le json comme une ligne

    $newRegisterToWrite = extractRegister($data);//crée tableau simple (non associatif)
    registerUsers($newRegisterToWrite);
}


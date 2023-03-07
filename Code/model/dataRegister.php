<?php
require "fileConnector.php";

//region Global variables
//endregion Global variables
function saveRegister($data)
{
    //Cette fonction crée un tableau et l'écrit dans le json comme une ligne
    $newRegisterToWrite = extractRegister($data);//crée tableau simple (non associatif)
    writeRegisterInJSON($newRegisterToWrite);
}

function extractRegister($data)
{
    $emailAddress = $data['inputEmailAddress'];
    $password = $data['inputPassword'];


    $newRegisterTemp = array($emailAddress, $password);
    return $newRegisterTemp;
}

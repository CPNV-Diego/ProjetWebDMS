<?php
require "fileConnector.php";

//region Global variables
$newRegister;
//endregion Global variables

function saveRegister($arrayInputUserForm)
{
    $newRegisterToWrite = extractRegister($arrayInputUserForm);
    writeRegisterInJSON($newRegisterToWrite);
}

function extractRegister($arrayInputUserForm)
{
    $emailAddress = $arrayInputUserForm['inputEmailAddress'];


    $newRegisterTemp = array($emailAddress);
    return $newRegisterTemp;
}

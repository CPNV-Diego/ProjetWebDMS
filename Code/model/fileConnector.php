<?php

function registerUsers($data)
{
    $filename = 'data/register.json';

    $file_data = file_get_contents($filename);
    $users = json_decode($file_data, true);

    if (existsNotInArray($data[0], $users)) {

        $users[] = array('email' => $data[0], 'password' => $data[1]);
        file_put_contents($filename, json_encode($users));
        return true;
    } else {
        return false;
    }
}

function existsNotInArray($email, $users)
{
    if(!empty($users)) {
        foreach ($users as $compare) {
            if ($compare['email'] == $email) {
                return false;
            }
            return true;
        }
    } else {
        return true;
    }
}
//<editor-fold desc="function">
/**
 * This function is designed to append a path with the fileName received as parameter
 * -The path will be found by the function
 * @param $fName : The file name to be append to the path
 * @return [String] full path to the log file expressed as a string
 * @example File Name : testFile.log / after function : [pathToFile]\testFile.log
 */
function setFullPath($fName)
{
    /* Help
        get current directory -> http://php.net/manual/en/function.getcwd.php
    */

    $currentPath = getcwd();
    $fullPathToFile = $currentPath . "\\" . $fName;
    return $fullPathToFile;
}

/**
 * This function is designed to write a string message in a file.
 * -The opening and closing action is managed by the fuction
 * @param $fileFullPath : The path containing expressing the path from the root to the filename
 * @param $lineToWrite : Is the content to write in the file.
 * @param $erase : Is an option allowing to erase the file before writing or happening the $lineToWrite a the end of the file
 */
/*function writeMsgInFile($fileFullPath, $lineToWrite, $erase)
{
    Help
    //http://php.net/manual/en/function.fopen.php


    $strWriter = null;
    if ($erase) {
        $strWriter = fopen($fileFullPath, "w+");
    } else {
        $strWriter = fopen($fileFullPath, "a+");
        $lineToWrite = $lineToWrite;
    }

    fwrite($strWriter, $lineToWrite . "\r\n ,");
    fclose($strWriter);
}*/
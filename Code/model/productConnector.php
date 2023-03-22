<?php

function productConnect()

{
    $strJsonFileContents = file_get_contents("data/products.json");
    var_dump($strJsonFileContents); // show contents

}
?>


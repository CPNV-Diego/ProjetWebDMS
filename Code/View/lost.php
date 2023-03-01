<?php
/**
 * Created by PhpStorm.
 * User: Pascal.BENZONANA
 * Date: 08.05.2017
 * Time: 09:16
 */

// tampon de flux stocké en mémoire
ob_start();
$title="DMS - Perdu";
?>

    <div>
        <h1>Cette page n'existe pas !</h1>

        <a href="index.php?action=home">Retourner à l'accueil</a>
    </div>

<?php
$content = ob_get_clean();
require "gabarit.php";
<?php
/**
 * Users: Simão Henriques da Silva / Diego Pinto Tomaz / Marcos Valente da Silva
 * File : lost.php
 */
// tampon de flux stocké en mémoire
ob_start();
$title="DMS - Perdu";
?>

    <div class="h1">
        <h1 class = "h1">Cette page n'existe pas !</h1>

        <a href="index.php?action=home">Retourner à l'accueil</a>
    </div>

<?php
$content = ob_get_clean();
require "gabarit.php";
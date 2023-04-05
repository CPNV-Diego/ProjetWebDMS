<?php
/**
 * Users: Simão Henriques da Silva / Diego Pinto Tomaz / Marcos Valente da Silva
 * File : login.php
 */

//Cela permet de vérifier si des données ont été dans un formulaire en méthode POST
// et vérifie si les données sont correctes en appelant la fonction IsLoginCorrect.
$status = true;
if($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST))
{
    $status = IsLoginCorrect($_POST);
    $_POST = [];
}

// tampon de flux stocké en mémoire
ob_start();
$title="DMS - Login";
?>

    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8">
        <title>FormulaireInscription</title>
        <link rel="stylesheet" href="view/css/bootstrap.css">
    </head>

    <body>
    <form method="post"
          action="index.php?action=login">
        <div class="container">
            <h2>Login</h2>
            <?php if($status == false){
                echo "<p>Mauvais email ou mauvais mot de passe !</p>";}
            ?>

            <div class="form-group">
                <label for="inputEmail">Email address *</label>
                <input type="email" class="form-control" id="inputEmail" name="inputEmailAddress" aria-describedby="emailHelp" placeholder="firstname@domain.ch" required>
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="inputPassword">Password *</label>
                <input type="password" class="form-control" id="inputPassword" name="inputPassword" placeholder="Password" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
    </body>
    </html>

<?php
//tampon de flux vidé de la mémoire
$content = ob_get_clean();
//appelle le fichier gabarit.php
require "gabarit.php";

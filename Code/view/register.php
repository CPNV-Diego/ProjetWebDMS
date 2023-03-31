<?php

/**
 * Users: Simão Henriques da Silva / Diego Pinto Tomaz / Marcos Valente da Silva
 * File : register.php
 */

$status = true;
if($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST))
{
    $status = saveRegister($_POST);
    $_POST = [];
}

// tampon de flux stocké en mémoire
ob_start();
$title="DMS - Register";
?>
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8">
        <title>FormulaireInscription</title>
        <link rel="stylesheet" href="view/css/bootstrap.css">
    </head>
    <?php if (isset($error)):?>
        <?php if ($error == "registration not possible") :?>
            <h5><span style="color:red">les deux mots de passe doivent être identiques</span></h5>
        <?php endif ?>
    <?php endif ?>
    <body>
    <form method="post" name="formRegister" action="index.php?action=register">
        <div class="container">
            <h2>Register</h2>
            <?php echo !$status ? "<p>Un compte avec cette adresse email existe déja !</p>" : '' ?>
        <div class="form-group">
            <label for="inputEmail">Email address *</label>
            <input type="email" class="form-control" id="inputEmail" name="inputEmailAddress" aria-describedby="emailHelp" value="<?=!empty($_POST) ? $_POST['inputEmailAddress'] : ''?>" placeholder="firstname@domain.ch" required>
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="inputPassword">Password *</label>
            <input type="password" class="form-control" id="inputPassword" name="inputPassword" placeholder="Password" required>
        <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
    </body>
    </html>


<?php
$content = ob_get_clean();
require "gabarit.php";
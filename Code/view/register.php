<?php
/**
 * Created by PhpStorm.
 * User: Pascal.BENZONANA
 * Date: 08.05.2017
 * Time: 09:16
 */

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

    <body>
    <h2>Register</h2>
    <form method="post" name="formRegister" action="index.php?action=home">
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
    </form>
    </body>
    </html>


<?php
$content = ob_get_clean();
require "gabarit.php";
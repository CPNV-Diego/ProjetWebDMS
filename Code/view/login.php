<?php
/**
 * Created by PhpStorm.
 * User: Pascal.BENZONANA
 * Date: 08.05.2017
 * Time: 09:16
 */
$status = true;
if($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST))
{
    $status = controlLogin($_POST);
    $_POST = [];
}
// tampon de flux stocké en mémoire
/*$msg = '';

if (isset($_POST['login']) && !empty($_POST['username'])
    && !empty($_POST['password'])) {

    if ($_POST['username'] == 'InputEmailAdresse' &&
        $_POST['password'] == '1234') {
        $_SESSION['valid'] = true;
        $_SESSION['timeout'] = time();
        $_SESSION['username'] = 'tutorialspoint';

        echo 'You have entered valid use name and password';
    }else {
        $msg = 'Wrong username or password';
    }
}*/
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
$content = ob_get_clean();
require "gabarit.php";

<?php
    $users = array(
        'a moi'=>'bb',
        'riri' => 'fifi',
        'yoda' => 'maitrejedi' );

$login = "anonymous";
$errorText = "";
$successfullyLogged = false;

if(isset($_GET['login']) && isset($_GET['password'])) {
    $tryLogin=$_GET['login'];
    $tryPwd=$_GET['password'];

    if( array_key_exists($tryLogin,$users) && $users[$tryLogin]==$tryPwd ) {
        $successfullyLogged = true;
        $login = $tryLogin;
    } else
        $errorText = "Erreur de login/password";
} else
    $errorText = "Merci d'utiliser le formulaire de login";

if(!$successfullyLogged) {
    echo $errorText;
} else {
    $_SESSION["log"] = $login;
    $_SESSION["Pwd"] = $tryPwd;
    header('location : index.php');
    echo "<h1>Bienvenu ".$login."</h1>";
}
?>
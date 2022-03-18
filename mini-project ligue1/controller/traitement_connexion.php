<?php
session_start();//active la session
$email = $_POST["email"];
$pwd = $_POST["pwd"];

if ($email == "admin@cci.fr" && $pwd =="1234")//vérif des champs
{
    $_SESSION['mail']=$email;//stocke la valeur de $email dans la variable de session 'mail'
    header('Location: ../view/accueil.php');//si ok, redirection vers le tableau
}
else{
    header('Location: ../public/index.php?error=true'); //sinon, redirection vers l'index avec une variable à get
}
?>
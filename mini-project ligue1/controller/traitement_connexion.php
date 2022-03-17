<?php
$email = $_POST["email"];
$pwd = $_POST["pwd"];

if ($email == "admin@cci.fr" && $pwd =="1234")//vérif des champs
{
    header('Location: ../view/accueil.php');//si ok, redirection vers le tableau
}
else{
    header('Location: ../public/index.php?error=true'); //sinon, redirection vers l'index avec une variable à get
}
?>
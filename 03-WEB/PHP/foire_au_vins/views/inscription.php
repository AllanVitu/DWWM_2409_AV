<?php

session_start();

if (isset($_SESSION["nom"]) && isset($_SESSION["prenom"]) && isset($_SESSION["age"])) {



echo " Bonjour M.(e) ". $_SESSION[ "prenom"]." ".$_SESSION["nom"]." votre age est de :".$_SESSION["age"]. " vous avez plus de 18 ans et vous êtes  autorisé  sur notre espace membre";  
}
else {
    echo "Vous n'êtes pas autorisé à accéder à cette espace !";
}

?>
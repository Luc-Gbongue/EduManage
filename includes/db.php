<?php
$host = "localhost";
$utilisateur = "root";
$motdepasse = "";
$dbname = "edumanage_db";

$connexion = mysqli_connect($host, $utilisateur, $motdepasse, $dbname);

if(!$connexion){
    die("La connection à la base de donnée a échoué");
}


mysqli_set_charset($connexion, "utf8");
?>
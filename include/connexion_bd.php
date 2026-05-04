<?php
$serveur = "localhost";
$bdName =  "bdroche";
$user = "root";
$pwd = "";

try{
    $con = new PDO("mysql:host=$serveur;dbname=$bdName", $user, $pwd);
}
catch(PDOExeption $e)
{
    die("Connextion echouer. Erreur : " . $e->getMessage());
}
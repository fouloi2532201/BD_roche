<!DOCTYPE html5>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <?php
         $nom = $_GET["nom"];
         $message = $_GET["message"];

         echo("<h1>Votre message : " . $message . "</h1>");
         echo("<h1>L'auteur du message est : " . $nom . "</h1>");
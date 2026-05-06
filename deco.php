<!DOCTYPE html5>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php
        include "include/header.php";
    ?>
    <?php
    session_unset();
    session_destroy();
    ?>
</body>


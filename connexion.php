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
    <div id="body2">
        <h1>Connexion</h1>
    </div>
    <div class="section2">
        <form method="post" action="action/connexion-action.php">
            <p id=msErreur style=color : black;><?php if(isset($_GET["message"])){echo $_GET["message"];} ?></p>
            <label id="email" for="email">Courriel : </label>
            <input type="email" id="email" name="email" autofocus required>
            <div class="section3">
                <label id="password" for="password">Mots de passe : </label>
                <input type="password" id="password" name="password" minlength="8" required>
            </div>
            <select name="langue" id="langue">
                <option value="francais">Français</option>
                <option value="tok-pisin">Tok Pisin</option>

            </select>
            <input id="submit" type="submit" value="Connexion">
        </form>
    </div>
    <?php
        include "include/footer.php";

    ?>
    <script src="script.js"></script>
</body>
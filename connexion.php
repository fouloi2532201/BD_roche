<!DOCTYPE html5>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php
include "include/header.php";
$xml = simplexml_load_file("./langue/connexion_$lang.xml");
?>
    <div id="body2">
        <?php echo "<h1>".htmlspecialchars($xml->connexion)."</h1>" ?>
    </div>
    <div class="section2">
        <form method="post" action="action/connexion-action.php">
            <p id=msErreur style=color : black;><?php if(isset($_GET["message"])){echo $_GET["message"];} ?></p>
            <label id="email" for="email"><?php echo htmlspecialchars($xml->email) ?></label>
            <input type="email" id="email" name="email" autofocus required>
            <div class="section3">
                <label id="password" for="password"><?php echo htmlspecialchars($xml->mdp) ?></label>
                <input type="password" id="password" name="password" minlength="8" required>
            </div>
            <select name="langue" id="langue">
                <option value="francais"><?php echo htmlspecialchars($xml->fr) ?></option>
                <option value="tok-pisin"><?php echo htmlspecialchars($xml->tok) ?></option>

            </select>
            <?php echo "<input id=submit type=submit value=".htmlspecialchars($xml->boutton).">"; ?>
        </form>
    </div>
    <?php
        include "include/footer.php";

    ?>
    <script src="script.js"></script>
</body>


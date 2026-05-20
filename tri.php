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
        <h1>Tri</h1>
    </div>
    <div class="section2">
        
        <form method="POST" action="cataloguetri.php">
        <label for="letre">Choisissez un ordre :</label>
            <select id="letre" name="letre">
            <?php 
                    echo "<option value='nom ASC'>A à Z</option>";
                    echo "<option value='nom DESC'>Z à A</option>";
                    echo "<option value='valeurDollars ASC'>0$ à 1000000000000$</option>";
                    echo "<option value='valeurDollars DESC'>1000000000000$ à 0$</option>";    
            ?>
            </select>
            <div>
            <?php 
                echo "<input id=submit type=submit value=Trier>";  
            ?>
            </div>
            </div>
            
        </form>
    </div>
    <?php
        include "include/footer.php";

    ?>
    <script src="script.js"></script>
</body>


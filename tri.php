<!DOCTYPE html5>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
<?php
include "include/header.php";
$xml = simplexml_load_file("./langue/tri_$lang.xml");

?>
    <div id="body2">
        <h1><?php echo htmlspecialchars($xml->filtre) ?></h1>
    </div>
    <div class="section2">
        
        <form method="POST" action="cataloguetri.php">
        <label for="letre"><?php echo htmlspecialchars($xml->choisire) ?></label>
            <select id="letre" name="letre">
            <?php 
                    echo "<option value='nom ASC'>A ".htmlspecialchars($xml->letre)." Z</option>";
                    echo "<option value='nom DESC'>Z  ".htmlspecialchars($xml->letre)." A</option>";
                    echo "<option value='valeurDollars ASC'>0$  ".htmlspecialchars($xml->letre)." 1000000000000$</option>";
                    echo "<option value='valeurDollars DESC'>1000000000000$  ".htmlspecialchars($xml->letre)." 0$</option>";    
            ?>
            </select>
            <div>
            <?php 
                echo "<input id=submit type=submit value=".htmlspecialchars($xml->trier).">";  
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


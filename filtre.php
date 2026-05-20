<!DOCTYPE html5>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php
include "include/header.php";
$xml = simplexml_load_file("./langue/filtre_$lang.xml");
?>
    <div id="body2">
        <?php echo "<h1>".htmlspecialchars($xml->filtre)."</h1>" ?>
    </div>
    <div class="section2">
        
        <form method="POST" action="cataloguefiltre.php">
            <label for="location"><?php echo htmlspecialchars($xml->location) ?></label>
                <select id="location" name="location">
                <?php 
                    $requete = "SELECT nomEndroit from tbllieu";
                    $reponce = $con->query($requete);
                    $tabroche = $reponce->fetchALL (PDO::FETCH_ASSOC);
                    foreach($tabroche as $roche){
                        echo "<option value=$roche[nomEndroit]>$roche[nomEndroit]</option>";
                    }
                ?>
                </select>
            <div class="section3">
            <label for="categorie"><?php echo htmlspecialchars($xml->categorie) ?></label>
            <select id="categorie" name="categorie">
            <?php 
                    $requete = "SELECT DISTINCT categorie from tblroche ORDER BY categorie ASC";
                    $reponce = $con->query($requete);
                    $tabroche = $reponce->fetchALL (PDO::FETCH_ASSOC);
                    foreach($tabroche as $roche){
                        echo "<option value=$roche[categorie]>$roche[categorie]</option>";
                    }      
            ?>
            </select>
            </div>
            <label for="prix"><?php echo htmlspecialchars($xml->tranchePrix) ?></label>
            <select id="prix" name="prix">
            <?php 
                echo "<option value='<10'>< 10$</option>";
                echo "<option value='>=10 AND tblroche.valeurDollars <25'> 10$ à 25$</option>";
                echo "<option value='>=25 AND tblroche.valeurDollars <50'> 20$ à 50$</option>";
                echo "<option value='>=50'> > 50$</option>";   
            ?>
            </select>
            <div>
            <?php 
                echo "<input id=submit type=submit value=".htmlspecialchars($xml->cherche).">";  
            ?>
            </div>
        </form>
    </div>
    <?php
        include "include/footer.php";

    ?>
    <script src="script.js"></script>
</body>


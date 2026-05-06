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
        <h1>filtre</h1>
    </div>
    <div class="section2">
        
        <form method="post" action="action/cataloguefiltre.php">
            <label for="location">Choisissez une location :</label>
                <select id="location" name="location">
                <?php 
                    $requete = "SELECT nomEndroit from tbllieu";
                    $reponce = $con->query($requete);
                    $tabroche = $reponce->fetchALL (PDO::FETCH_ASSOC);
                    foreach($tabroche as $roche){
                        echo "<option value=valeur$roche[nomEndroit]>$roche[nomEndroit]</option>";
                    }
                ?>
                </select>
            <div class="section3">
            <label for="categorie">Choisissez une categorie :</label>
            <select id="categorie" name="categorie">
            <?php 
                    $requete = "SELECT DISTINCT categorie from tblroche ORDER BY categorie ASC";
                    $reponce = $con->query($requete);
                    $tabroche = $reponce->fetchALL (PDO::FETCH_ASSOC);
                    foreach($tabroche as $roche){
                        echo "<option value=valeur$roche[categorie]>$roche[categorie]</option>";
                    }      
            ?>
            </select>
            </div>
            <label for="prix">Choisissez une tranche de prix :</label>
            <select id="prix" name="prix">
            <?php 
                echo "<option value=< 5>< 5$</option>";
                echo "<option value=< 5 & >=10>5$ à 10$</option>";
                echo "<option value=< 10 & >=15>10$ à 15$</option>";
                echo "<option value=>15>< 15$</option>";   
            ?>
            </select>
            <div>
            <?php 
                echo "<button><a href=cataloguefiltre.php>Chercher</a></button>";  
            ?>
            </div>
        </form>
    </div>
    <?php
        include "include/footer.php";

    ?>
    <script src="script.js"></script>
</body>


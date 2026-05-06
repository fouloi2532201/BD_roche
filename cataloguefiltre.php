<!DOCTYPE html5>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
</head>
<body id="body4">
    <?php
        $lang = "tok_pisin";
        if((isset($_COOKIE["langueCoockie"])))
        {
            if($_COOKIE["langueCoockie"] == "francais"){
                $lang = "fr";
            }
        }
        include "include/header.php";
        include "include/connexion_bd.php";
    ?>
    <div id="catalogue">
    <?php
        $location = $_POST["location"];
        $categorie = $_POST["categorie"];
        $prix = $_POST["prix"];
        $xml = simplexml_load_file("./langue/catalogue_".$lang.".xml");
        function afficherRoche($nom, $lieu, $descri, $cate, $valeur)
            {
                echo("<div class = part1>");
                    echo("
                    <h1>".$nom."</h1>
                    <p>".$lieu."</p>
                    <p>".$descri."</p>
                    <p>".$cate."</p>
                    <p>".$valeur." $</p>
                    ");
                    echo("</div>");
            }
        if(isset($xml)){
            try{
                
                $requete = "SELECT nom, nomLieu, description1, categorie, valeurDollars from tblroche WHERE valeurDollars $prix";
                $reponce = $con->query($requete);
                $tabroche = $reponce->fetchALL (PDO::FETCH_ASSOC);
                foreach($tabroche as $roche){
                    afficherRoche($roche["nom"], $roche["nomLieu"], $roche["description1"], $roche["categorie"], $roche["valeurDollars"]);
                }

            }catch(PDOException $e)
            {
                echo $e->getMessage();
            }
            
        }
        ?>
    </div>
    <?php
        include "include/footer.php";

    ?>
</body>
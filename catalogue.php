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
    <script>
// 🔹 Lire le cookie
function getCookie(nom) {
    let cookies = document.cookie.split(';');
    for (let c of cookies) {
        c = c.trim();
        if (c.startsWith(nom + "=")) {
            return c.substring(nom.length + 1);
        }
    }
    return "";
}

// 🔹 Appliquer le thème
function appliquerTheme(theme) {
    const el = document.querySelector("#catalogue");
    if (!el) return; // sécurité si l'élément n'existe pas

    if (theme === "sombre") {
        el.style.background = "linear-gradient(to right,rgb(139, 48, 117),rgb(201, 121, 199))";
    } else if (theme === "clair") {
        el.style.background = "linear-gradient(to right,rgb(255, 115, 80),rgb(254, 180, 123))";
    }
}

// 🔹 Appliquer automatiquement au chargement
window.addEventListener("DOMContentLoaded", function() {
    const theme = getCookie("theme");
    if (theme) {
        appliquerTheme(theme);
    }
});
</script>
    <?php
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

                if (isset($_SESSION["biscuit"]))
                {
                    echo "<button><a href=filtre.php>Filtre</a></button>";
                    echo "<button><a href=tri.php>Tri</a></button>";
                }

                $requete = "SELECT nom, nomLieu, description1, categorie, valeurDollars from tblroche";
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

    
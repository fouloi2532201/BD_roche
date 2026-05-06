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

        if(isset($xml)){
            foreach ($xml->children() as $catalogue){
                echo "<section>";
                echo "<article id=planete>";
                echo "<img class=img3 src=".$catalogue->lien.">";
                echo "<h2>".htmlspecialchars($catalogue->roche)."</h2>";
                echo "<p>".htmlspecialchars($catalogue->salaire)."</p>";
                echo "<p>".htmlspecialchars($catalogue->note)."</p>";
                echo "<input type=button value=".htmlspecialchars($catalogue->detail).">";
                echo "</article>";
                echo "</section>";
            }
        }
        ?>
    </div>
    <?php
        include "include/footer.php";

    ?>
</body>

    
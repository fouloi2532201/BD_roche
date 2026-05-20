
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
<div id="body">
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
    const el = document.querySelector("#body");
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
    <aside>
        <img id="img2"src="img/4494454.jpg">
    </aside>
    <section>
        <?php
        $xml = simplexml_load_file("./langue/index_$lang.xml");
        if(isset($xml)){
            affichageindex($xml);
            deco($xml);
        }


        function affichageindex($xml)
        {
            echo "<h1>".htmlspecialchars($xml->text1)."</h1>";
            echo "<h1>".htmlspecialchars($xml->text2)."</h1>";
            echo "<a href=catalogue.php>";
            echo "<button type=button>Connexion</button>";
            echo "</a>";
        }

        function deco($xml)
        {
            
            echo "<a href=decoco.php>";
            echo "<button type=button>Déconnexion</button>";
            echo "</a>";
            exit;
        }
        ?>
    </section>
</div>
<?php
include "include/footer.php";
?>
<script src="script.js"></script>
</body>
</html>
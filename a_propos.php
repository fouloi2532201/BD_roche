<!DOCTYPE html5>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
</head>
<body id="body4">
    
    <?php

    include "include/header.php";
    ?>
    <div id="a_propos">
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
    const el = document.querySelector("#a_propos");
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
        $xml = simplexml_load_file("./langue/propos_".$lang.".xml");

        if (isset($xml)){
            echo "<table>";
            foreach ($xml->children() as $propos)
            {
                echo "<tr>";
                echo "<td>".htmlspecialchars($propos->adresse)."</td>";
                echo "<td>".htmlspecialchars($propos->employe)."</td>";
                echo "<td>".htmlspecialchars($propos->revenu)."</td>";
                echo "<td>".htmlspecialchars($propos->travail)."</td>";
                echo "</tr>";
            }
        }
    ?>

    </div>
    <?php

        include "include/footer.php";
        ?>
</body>

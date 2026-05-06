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
    <div class="section2">
    <form method="post" action="action/connexion-action.php">
    <!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">

<style>
.section2 {
    width: 100%;
    height: 200px;
    background: lightgray;
    transition: 0.4s;
}
</style>

</head>
<body>

<div class="section2"></div>

<button onclick="changer()">Sombre</button>
<button onclick="changerClaire()">Claire</button>

<script>
// 🔹 Fonction pour créer un cookie
function setCookie(nom, valeur, jours) {
    let date = new Date();
    date.setTime(date.getTime() + (jours * 24 * 60 * 60 * 1000));
    document.cookie = nom + "=" + valeur + ";expires=" + date.toUTCString() + ";path=/";
}

// 🔹 Fonction pour lire un cookie
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
    const el = document.querySelector(".section2");

    if (theme === "sombre") {
        el.style.background = "linear-gradient(to right,rgb(139, 48, 117),rgb(201, 121, 199))";
    } else if (theme === "clair") {
        el.style.background = "linear-gradient(to right,rgb(255, 115, 80),rgb(254, 180, 123))";
    }
}

// 🔹 Boutons
function changer() {
    appliquerTheme("sombre");
    setCookie("theme", "sombre", 30);
}

function changerClaire() {
    appliquerTheme("clair");
    setCookie("theme", "clair", 30);
}

// 🔹 Charger le thème au démarrage
window.onload = function() {
    const theme = getCookie("theme");
    if (theme) {
        appliquerTheme(theme);
    }
};
</script>

</body>
</html>
            <input type="email" id="email" name="email" autofocus required>
            <div class="section3">
                <label id="password" for="password">Mots de passe : </label>
                <input type="password" id="password" name="password" minlength="8" required>
            </div>
            <select name="langue" id="langue">
                <option value="francais">Français</option>
            </select>
            <input id="submit" type="submit" value="Connexion">
        </form>
    </div>
<?php
include "include/footer.php";
?>
<script src="script.js"></script>
</body>
</html>
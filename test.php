<html lang="fr">
<body>
    <?php
        echo "hello world";
        $estActif = true;
        if ($estActif == true)
            echo "Est actif";
        else
            echo "N'est pas actif";

        $tabJeux = ["Demineur","skate 3", "candy crush", "chat gpt", "loic"];
        foreach ($tabJeux as $tabJeux)
            echo "<tr><td>$tabJeux</td></tr>";
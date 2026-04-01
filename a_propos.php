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

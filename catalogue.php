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

    
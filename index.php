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
    <aside>
        <img id="img2"src="img/4494454.jpg">
    </aside>
    <section>
        <?php
        $xml = simplexml_load_file("./langue/index_fr.xml");

        if(isset($xml)){
            affichageindex($xml);
        }

        function affichageindex($xml)
        {
            echo "<h1>".htmlspecialchars($xml->text1)."</h1>";
            echo "<h1>".htmlspecialchars($xml->text2)."</h1>";
            echo "<input id=commence type=button value=".htmlspecialchars($xml->bouton)." onclick=btn_Commence()>";
            echo "<input id=submit type=submit value=Deconnection onclick=deco()>";
        }
        function deco()
        {
            session_unset();
            session_destroy();
            header("Location: login.php?message=Vous avez été déco");
            echo "cnusaygdsvbuai";
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
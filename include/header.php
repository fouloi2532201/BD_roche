<?php
session_start();
?>
<!DOCTYPE html5>
<?php
    include "connexion_bd.php";
    $lang = "tok_pisin";
    if(isset($_COOKIE["langueCoockie"])){
        if($_COOKIE["langueCoockie"] == "francais"){
            $lang = "fr";
        }
    }
?>
<html lang="<?php echo "$lang" ?>">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header>
    <?php
        $xml = simplexml_load_file("./langue/header_".$lang.".xml");

        if(isset($xml)){
            affichageTest($xml);
        }

        function affichageTest($xml)
        {
            echo '<img id="img1" src="img/roche.jpg">';
            echo "<div id=lien>";
            echo "<a href=index.php>".htmlspecialchars($xml->accueil)."</a>";
            echo "<a href=catalogue.php>".htmlspecialchars($xml->catalogue)."</a>";
            echo "<a href=a_propos.php>".htmlspecialchars($xml->propos)."</a>";
            if (isset($_SESSION["biscuit"])){
                echo "<a href=profile.php>profil</a>";
            }
            else{
                echo "<a href=connexion.php>".htmlspecialchars($xml->connexion)."</a>";
                echo "<a href=Insciption.php>inscription</a>";
            }
        }
    ?>
    </header>
</body>
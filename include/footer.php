<!DOCTYPE html5>
<?php
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
<footer>
    <?php
        $xml = simplexml_load_file("./langue/footer_".$lang.".xml");

        if(isset($xml)){
            affichage($xml);
        }

        function affichage($xml)
        {
            echo "<p>".htmlspecialchars($xml->copy)."</p>";
        }
    ?>
</footer>
</body>
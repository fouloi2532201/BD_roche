<?php
session_start();
$email = $_POST["email"];
$password = $_POST["password"];
$langue = $_POST["langue"];
ValidationConnexion($email, $password, $langue);
    function ValidationConnexion($email, $password,$langue)
    {
        if($email != "" && $password != ""){
            if($email == "test@cegepjonquiere.ca" && $password == "testcegep"){
                $_SESSION["email"] = $_POST["email"];
                $nbSecondesParJour = 60*60*24;
                $expiration = time() + $nbSecondesParJour;
                $cookieNom="langueCoockie";
                $cookieValeur=$_POST["langue"];
                setcookie($cookieNom, $cookieValeur, $expiration, "/");
                header("Location: ../catalogue.php");
                exit();
            
            }
            else{
                header("Location: ../connexion.php?message=Mauvais utilisateur ou mauvais mot de passe");
                exit();
            }
        }
        else
        {
            header("Location: ../connexion.php?message=Mauvais utilisateur ou mauvais mot de passe");
            exit();
        }
    }
    
?>
<html>
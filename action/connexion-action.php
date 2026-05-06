<?php
$email = $_POST["email"];
$password = $_POST["password"];
$langue = $_POST["langue"];

    function ValidationConnexion($email, $password, $langue)
    {
        if($email != "" && $password != ""){
            $hashStockeEnBase = password_hash($password, PASSWORD_BCRYPT);
           try
           {
            if(password_verify($password, $hashStockeEnBase))
            {
                session_start();
                session_regenerate_id(true);
                $_SESSION["biscuit"] = "bombon";
                header("Location: ../index.php");
            }
                
           } 
           catch(PDOException $e)
           {
                echo $e->getMessage();
           }
        }
        else
        {
            header("Location: ../connexion.php?message=Mauvais utilisateur ou mauvais mot de passe");
            exit();
        }
    }
    ValidationConnexion($email, $password, $langue);

?>
<html>
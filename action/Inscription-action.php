<?php

$email = $_POST["email"];
$password = $_POST["password"];
$langue = $_POST["langue"];
include "../include/connexion_bd.php";

    function ValidationInscription($email, $password, $langue, $con)
    {
        if($email != "" && $password != "")
        {
           try
           {
            $validation = false;
            $hashStockeEnBase = password_hash($password, PASSWORD_BCRYPT);

            $stmt = $con->prepare('INSERT INTO tblUtilisateur (email, mdp) VALUES (?,?)');
            $stmt->execute([
                $email,
                $hashStockeEnBase ]);
                header("Location: ../connexion.php");
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
    ValidationInscription($email, $password,$langue, $con);

    
?>
<html>
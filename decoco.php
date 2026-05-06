<?php
    include "include/header.php";
    session_unset();
    session_destroy();
    setcookie("theme", "", time() - 3600, "/");
    header("Location: ./connexion.php");

?>
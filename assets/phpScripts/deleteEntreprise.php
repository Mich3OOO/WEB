<?php

include "PDO.php";
if(!isset($_SESSION))
    {
        session_start();
    }
$connexion = new Sql($_SESSION["role"]);



?>

<?php

include "PDO.php";
if(!isset($_SESSION))
    {
        session_start();
    }
$connexion = new Sql($_SESSION["role"]);



$DeleteNecessite = $connexion->delete("DELETE FROM necessite WHERE IDOffre = '".$_GET['ID']."';");
$DeleteViser = $connexion->delete("DELETE FROM viser WHERE IDOffre = '".$_GET['ID']."';");
$DeleteOffre = $connexion->delete("DELETE FROM offre WHERE IDOffre = '".$_GET['ID']."';");



header('Location: http://presquauchaud.ddns.net/recherche/');
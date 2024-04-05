<?php

include "PDO.php";
if(!isset($_SESSION))
    {
        session_start();
    }
$connexion = new Sql($_SESSION["role"]);


$IDE = $connexion->GetFirstRow("SELECT IDE FROM entreprise WHERE NomE = '".$_GET['Nom']."';");
$DeleteClasse = $connexion->delete("DELETE IDE FROM Offre WHERE IDE = '".$IDE[0]."';");
$DeletePilote = $connexion->delete("DELETE FROM entreprise WHERE IDE = '".$IDE[0]."';");


header('Location: http://presquauchaud.ddns.net/recherche_Entreprise/');
?>

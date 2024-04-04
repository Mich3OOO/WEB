<?php

include "PDO.php";
if(!isset($_SESSION))
    {
        session_start();
    }
$connexion = new Sql($_SESSION["role"]);

$role=$connexion->GetFirstRow("SELECT role FROM utilisateur WHERE IDu='".$_GET["IDu"]."'; ");

var_dump($_GET["IDu"]);
if($role["role"]=="Etudiant"){
    $req=$connexion->delete("DELETE FROM utilisateur INNER JOIN etudiant ON etudiant.IDu=utilisateur.IDu INNER JOIN postuler ON postuler.IDu=etudiant.IDu INNER JOIN interesser ON interesser.IDu=etudiant.IDu INNER JOIN note ON note.IDu=utilisateur.IDu WHERE utilisateur.IDu='".$_GET['IDu']."';");
    header('Location: ../../recherche_user/');  
}



<?php

include "PDO.php";
$connexion = new Sql(1);

if($_GET["role"]=="Etudiant"){
    $req=$connexion->delete("DELETE FROM utilisateur INNER JOIN etudiant ON etudiant.IDu=utilisateur.IDu INNER JOIN postuler ON postuler.IDu=etudiant.IDu INNER JOIN interesser ON interesser.IDu=etudiant.IDu INNER JOIN note ON node.IDu=utilisateur.IDu WHERE IDu='".$_GET['IDu']."';");
}


header('Location: ../../recherche_user/');
<?php

include "PDO.php";
if(!isset($_SESSION))
    {
        session_start();
    }
$connexion = new Sql($_SESSION["role"]);
$role=$connexion->GetFirstRow("SELECT role FROM utilisateur WHERE IDu='".$_GET["IDu"]."'; ");
var_dump($role);
if($role[0] =='Etudiant'){
    $DeleteInteresser = $connexion->delete("DELETE FROM interesser WHERE IDu = '".$_GET['IDu']."';");
    $DeletePostuler = $connexion->delete("DELETE FROM Postuler WHERE IDu = '".$_GET['IDu']."';");
    $DeleteNote = $connexion->delete("DELETE FROM note WHERE IDu = '".$_GET['IDu']."';");
    $DeleteEtudiant = $connexion->delete("DELETE FROM etudiant WHERE IDu = '".$_GET['IDu']."';");
    $DeleteUtilisateur = $connexion->delete("DELETE FROM Utilisateur WHERE IDu = '".$_GET['IDu']."';");
} else if($role[0] == 'Pilote') {
    $DeleteClasse = $connexion->delete("DELETE IDu FROM Classe WHERE IDu = '".$_GET['IDu']."';");
    $DeletePilote = $connexion->delete("DELETE FROM pilote WHERE IDu = '".$_GET['IDu']."';");
    $DeleteUtilisateur = $connexion->delete("DELETE FROM Utilisateur WHERE IDu = '".$_GET['IDu']."';");
} else {
    $DeleteInteresserAdmin = $connexion->delete("DELETE FROM interessera WHERE IDu = '".$_GET['IDu']."';");
    $DeletePostulerAdmin = $connexion->delete("DELETE FROM PostulerA WHERE IDu = '".$_GET['IDu']."';");
    $DeleteAdmin = $connexion->delete("DELETE FROM Admin WHERE IDu = '".$_GET['IDu']."';");
    $DeleteUtilisateur = $connexion->delete("DELETE FROM Utilisateur WHERE IDu = '".$_GET['IDu']."';");
}


header('Location: http://presquauchaud.ddns.net/recherche_user/');
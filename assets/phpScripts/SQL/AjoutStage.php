<?php

var_dump($_GET);
    include "../PDO.php";
    if(!isset($_SESSION))
    {
        session_start();
    }
    $connexion = new Sql($_SESSION["role"]);

    if($connexion->Set("SELECT IF( EXISTS (SELECT IDE from entreprise WHERE NomE = '".$_GET['Nom_Entreprise']."'),1,0);")){
        $requêteIDE = $connexion->Set("SELECT IDE from entreprise WHERE NomE = '".$_GET['Nom_Entreprise']."' ;");
        $requêteOffre = $connexion->Add("INSERT INTO offre (Duree,Poste, remune, Nb_place, Descr, IDE) VALUES('".$_GET['Duree']."','".$_GET['Poste']."', '".$_GET['Renumeration']."', '".$_GET['NB_Places']."', '".$_GET['Description']."', '".$requêteIDE."');");
        $requêteIDoffre = $connexion->Set("SELECT IDoffre from offre WHERE Poste = '".$_POST['Poste']."' ");
        $requêteIDT = $connexion->Set("SELECT IDT from types_de_promotions WHERE Nom_du_Type = '".$_POST['TypePromo']."' ");
        $requête5 = $connexion->Set("INSERT INTO viser (IDoffre, IDT) VALUES('".$requêteIDoffre."', '".$requêteIDT."');");
    } else {
        echo "L'entreprise n'existe pas ! Veuillez d'abord la créer !";
    }
?>
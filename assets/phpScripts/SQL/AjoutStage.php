<?php
    include "PDO.php";
    $connexion = new Sql(1);


    $requête = $connexion->Set("INSERT INTO entreprise (NomE, descr, MailE, TelE, Site) VALUES('".$_POST['Poste']."', '".$_POST['Nom_Entreprise']."', '".$_POST['Renumeration']."', '".$_POST['NB_Places']."');");
    $requête2 = $connexion->Set("INSERT INTO adresse (adresseA) VALUES ('".$_POST['Adresse']."');");
    $requête3 = $connexion->Set("INSERT INTO ville (Code_Post, ville) VALUES ('".$_POST['CP']."', '".$_POST['Ville']."');");
?>
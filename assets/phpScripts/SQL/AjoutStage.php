<?php
    include "PDO.php";
    $connexion = new Sql(1);

    $requête = $connexion->Set("SELECT IDE from entreprise WHERE NomE = '".$_POST['Nom_Entreprise']."' ");
    $requête2 = $connexion->Set("INSERT INTO offre (Poste, remune, Nb_place, Description, IDE) VALUES('".$_POST['Poste']."', '".$_POST['Renumeration']."', '".$_POST['NB_Places']."', '".$_POST['Description']."', '"$requête"');");
    $requête3 = $connexion->Set("INSERT INTO adresse (adresseA) VALUES ('".$_POST['Adresse']."');");
    $requête4 = $connexion->Set("INSERT INTO ville (Code_Post, ville) VALUES ('".$_POST['CP']."', '".$_POST['Ville']."');");
?>
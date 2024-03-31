<?php
    include "PDO.php";
    $connexion = new Sql(1);

    if($connexion->Set("IF EXIST (SELECT NomE FROM entreprise WHERE NomE = '"$_GET['NomE']"');")){
        echo 'Entreprise déjà existante';
    } else {
        if($connexion->set("IF EXISTS (SELECT adresseA FROM adresse WHERE adresseA ='"$_GET['adresseA']"')")){
            $Stock = $connexion->set("SELECT ID_adresse FROM adresse WHERE adresseA = '"$_GET['adresseA']"';");
            $requête = $connexion->Set("INSERT INTO entreprise (NomE, descr, MailE, TelE, Site, moyenne,N_siret, IDu, ID_adresse, Secteur_d_activite) VALUES('".$_POST['Nom_Entreprise']."', '".$_POST['Description']."', '".$_POST['Mail']."', '".$_POST['Num_Tel']."', '".$_POST['Site_Internet']."', 0, 6, '".$_POST['Sect_Activite']."', '".$stock."');");
        }

    }


    //$requête2 = $connexion->Set("INSERT INTO adresse (adresseA) VALUES ('".$_POST['Adresse']."');");
    //$requête3 = $connexion->Set("INSERT INTO ville (Code_Post, ville) VALUES ('".$_POST['CP']."', '".$_POST['Ville']."');");
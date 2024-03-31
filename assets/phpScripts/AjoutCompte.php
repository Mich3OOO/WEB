<?php
    include "PDO.php";
    $connexion = new Sql(1);

    if($connexion->Set("IF EXIST (SELECT NomU,PrenomU FROM utilisateur WHERE NomU = '"$_GET['Nom']"' AND PrenomU ='"$_GET['Prenom']"');")){
        echo 'Etudiant déjà existante';
    } else {
        if($connexion->set("IF EXISTS (SELECT adresseA FROM adresse WHERE adresseA ='"$_GET['adresseA']"')")){
            $Stock = $connexion->set("SELECT ID_adresse FROM adresse WHERE adresseA = '"$_GET['adresseA']"';");
            if($connexion->set("IF EXISTS (SELECT ville FROM ville WHERE ville ='"$_GET['ville']"')")){
                $Stock2 = $connexion->set("SELECT Code_Post FROM ville WHERE ville = '"$_GET['ville']"';")
                $requête = $connexion->exec("INSERT INTO utilisateur (MdpU, NomU, PrenomU, Date_NaisU, MailU, role, ID_adresse) VALUES('".$_POST['Mot-de-passe']."','".$_POST['Nom']."', '".$_POST['Prneom']."', '".$_POST['Date-naissance']."', '".$_POST['Mail']."', '".$_POST['Role']."',  '".$stock"');");
            }
        } else {
    
        }

    }
    $requête2 = $connexion->Set("INSERT INTO adresse (adresseA) VALUES ('".$_POST['Adresse']."');");
    $requête3 = $connexion->Set("INSERT INTO ville (Code_Post, ville) VALUES ('".$_POST['CP']."', '".$_POST['Ville']."');");
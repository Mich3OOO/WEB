<?php
    include "PDO.php";
    $connexion = new Sql(1);
    if($connexion->GetArray("SELECT NomU FROM utilisateur WHERE NomU = '".$_GET['Nom']."' AND PrenomU ='".$_GET['Prenom']."';")==!null){
        echo 'Utilisateur déjà existant'; 
    } else {
        if($connexion->GetArray("SELECT adresseA FROM adresse INNER JOIN ville ON ville.idv = adresse.idv WHERE adresseA ='".$_GET['Adresse']."' AND ville = '".$_GET['Ville']."';")==!null){
            $StockAdresse = $connexion->GetFirstRow("SELECT ID_adresse FROM adresse INNER JOIN ville ON ville.idv = adresse.idv WHERE adresseA = '".$_GET['Adresse']."' AND ville = '".$_GET['Ville']."';");
        } 
        else {
            if($connexion->GetArray("SELECT ville FROM ville WHERE ville ='".$_GET['Ville']."';")==!null){
                $StockVille = $connexion->GetArray("SELECT idv FROM ville WHERE ville = '".$_GET['Ville']."';");
                $requêteAdresse = $connexion->add("INSERT INTO adresse (adresseA, idv) VALUES('".$_GET['Adresse']."','".$StockVille[0]."');");
                $StockAdresse = $connexion->GetArray("SELECT ID_adresse FROM adresse INNER JOIN ville ON Adresse.idv = ville.idv WHERE adresseA = '".$_GET['adresseA']."' AND '".$_GET['Ville']"';");
                $requêteUtilisateur = $connexion->add("INSERT INTO utilisateur (MdpU, NomU, PrenomU, Date_NaisU, MailU, role, ID_adresse) VALUES('".$_POST['Mot-de-passe']."','".$_POST['Nom']."', '".$_POST['Prenom']."', '".$_POST['Date-naissance']."', '".$_POST['Mail']."', '".$_POST['Role']."',  '".$StockAdresse[0]."');");
            }
            else{
                $StockRegion=$connexion->GetArray("SELECT ID_reg FROM reg WHERE reg = '".$_GET['Region']."';");
                $requêteVille = $connexion->add("INSERT INTO ville (Code_Post, ville,ID_reg) VALUES ('".$_POST['CP']."', '".$_POST['Ville']."', '".$_POST['Region']."');");
                $StockVille=$connexion->GetArray("SELECT idv FROM Ville WHERE Ville = '".$_GET['Ville']."';");
                $requêteAdresse=$connexion->add("INSERT INTO Adresse (adresseA, idv) VALUES('".$_POST['Adresse']."','".$StockVille[0]."');");
                $StockAdresse = $connexion->GetArray("SELECT ID_adresse FROM adresse INNER JOIN ville ON Adresse.idv = ville.idv WHERE adresseA = '".$_GET['adresseA']."' AND '".$_GET['Ville']."';");
            }
        }
        $requêteUtilisateur = $connexion->add("INSERT INTO utilisateur (MdpU, NomU, PrenomU, Date_NaisU, MailU, role, ID_adresse) VALUES('".$_GET['Mot-de-passe']."','".$_GET['Nom']."', '".$_GET['Prenom']."', '".$_GET['Date-naissance']."', '".$_GET['Mail']."', '".$_GET['Role']."',  '".$StockAdresse[0]."');");
        $StockUtilisateur = $connexion->GetArray("SELECT IDu FROM Utilisateur WHERE NomU = '".$_GET['Nom']."' AND PrenomU = '".$_GET['Prenom']."';");

        $roleUti = $connexion->GetFirstRow("SELECT role FROM utilisateur WHERE NomU = '".$_GET['Nom']."' AND PrenomU = '".$_GET['Prenom']."';");
        if ($roleUti[0] == 'Etudiant'){
            $StockClasse = $connexion->GetArray("SELECT IDClasse FROM Classe INNER JOIN types_promotions ON Classe.IDT = types_promotions.IDT INNER JOIN promotions ON promotions.IDProm = Classe.IDProm WHERE Promotion = '".$_GET['Promotion']."' AND Nom_du_Type = '".$_GET['Typepromo']."';");
        } else {
            
        }
    }

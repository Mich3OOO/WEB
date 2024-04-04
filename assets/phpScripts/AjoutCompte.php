<?php
    include "PDO.php";
    if(!isset($_SESSION))
    {
        session_start();
    }

    $connexion = new Sql($_SESSION["role"]);
    $ExisteU = $connexion->GetFirstRow("SELECT IF ( EXISTS (SELECT NomU FROM utilisateur WHERE NomU = '".$_GET['Nom']."' AND PrenomU ='".$_GET['Prenom']."'),1,0);");
    if($ExisteU[0]!=0){
        echo 'Utilisateur déjà existant'; 
    } else {
        $test = $connexion->GetFirstRow("SELECT IF( EXISTS ( SELECT ID_adresse FROM adresse INNER JOIN ville ON ville.idv = adresse.idv WHERE ville = '".$_GET['Ville']."' AND adresseA='".$_GET['Adresse']."'),1,0);");
        if ($test[0] == 0){
            $test2 = $connexion->GetFirstRow("SELECT IF( EXISTS ( SELECT idv FROM ville WHERE ville = '".$_GET['Ville']."'),1,0);");
            if($test2[0]== 0){
                $StockRegion = $connexion->GetFirstRow("SELECT ID_reg FROM reg WHERE reg = '".$_GET['Region']."';");
                $requeteVille = $connexion->add("INSERT INTO ville(ville, Code_Post, ID_adresse) VALUES ('".$_GET['Ville']."','".$_GET['CP']."','".$StockRegion[0]."');");
            }
        }
        $StockVille = $connexion->GetFirstRow("SELECT idv FROM ville WHERE ville = '".$_GET['Ville']."';");
        $requeteAdresse = $connexion->add("INSERT INTO Adresse(adresseA, idv) VALUES ('".$_GET['Adresse']."', '".$StockVille[0]."')");
        $StockAdresse = $connexion->GetFirstRow("SELECT ID_adresse FROM adresse INNER JOIN ville ON ville.idv = adresse.idv WHERE ville = '".$_GET['Ville']."' AND adresseA = '".$_GET['Adresse']."';");    
        $requêteUtilisateur = $connexion->add("INSERT INTO utilisateur (MdpU, NomU, PrenomU, Date_NaisU, MailU, role, ID_adresse) VALUES('".password_hash($_GET['Mot-de-passe'],PASSWORD_DEFAULT)."','".$_GET['Nom']."', '".$_GET['Prenom']."', '".$_GET['Date-naissance']."', '".$_GET['Mail']."', '".$_GET['Role']."',  '".$StockAdresse[0]."');");
        $StockUtilisateur = $connexion->GetFirstRow("SELECT IDu FROM Utilisateur WHERE NomU = '".$_GET['Nom']."' AND PrenomU = '".$_GET['Prenom']."';");
        $StockIDu = $connexion->GetFirstRow("SELECT IDu FROM utilisateur WHERE NomU = '".$_GET['Nom']."' AND PrenomU ='".$_GET['Prenom']."';");
        if ($_GET['Role'] == 'Etudiant'){
            $StockClasse = $connexion->GetFirstRow("SELECT IDClasse FROM Classe INNER JOIN types_promotions ON Classe.IDT = types_promotions.IDT INNER JOIN promotion ON promotion.IDProm = Classe.IDProm WHERE Promotion = '".$_GET['Promotion']."' AND Nom_du_Type = '".$_GET['Typepromo']."';");
            $requeteEtudiant = $connexion->add("INSERT INTO etudiant(IDu,IDClasse) VALUES ('".$StockIDu[0]."', '".$StockClasse[0]."' );");
        } else  if ($_GET['Role'] == 'Pilote'){
            $requetePilote = $connexion->add("INSERT INTO pilote(IDu) VALUES ('".$StockIDu[0]."');");
        } else {
            $requetePilote = $connexion->add("INSERT INTO admin(IDu) VALUES ('".$StockIDu[0]."');");
        }
    }


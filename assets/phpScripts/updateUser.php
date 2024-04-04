<?php
include "PDO.php";
if(!isset($_SESSION))
    {
        session_start();
    }
$connexion = new Sql($_SESSION["role"]);
//$connexion->Update("UPDATE utilisateur,promotion,campus,adresse,ville,reg SET MdpU='".$_GET["Mot-de-passe"]."',NomU='".$_GET["Nom"]."',PrenomU='".$_GET["Prenom"]."',Date_NaisU='".$_GET["Date-naissance"]."',MailU='".$_GET["Mail"]."',role='".$_GET["Role"]."',adresseA='".$_GET["Adresse"]."',promotion='".$_GET["Promotion"]."',NomC='".$_GET["Campus"]."',Code_Post='".$_GET["CP"]."',ville='".$_GET["Ville"]."',reg='".$_GET["Region"]."' FROM utilisateur INNER JOIN adresse ON utilisateur.ID_adresse=adresse.ID_adresse INNER JOIN ville ON ville.idv=adresse.idv INNER JOIN reg ON reg.ID_reg=ville.ID_reg INNER JOIN promotion ON utilisateur.IDu=promotion.IDu INNER JOIN campus ON promotion.idCentre=campus.idCentre WHERE IDu ='".$_GET["IDu"]."';");

// $stockId=$connexion->GetFirstRow("Select adresse.ID_adresse,adresse.idv,ville.ID_reg,campus.idCentre FROM utilisateur INNER JOIN adresse ON utilisateur.ID_adresse=adresse.ID_adresse INNER JOIN ville ON ville.idv=adresse.idv INNER JOIN reg ON reg.ID_reg=ville.ID_reg INNER JOIN promotion ON utilisateur.IDu=promotion.IDu INNER JOIN campus ON promotion.idCentre=campus.idCentre WHERE utilisateur.IDu ='".$_GET["IDu"]."';");

$test = $connexion->Set("SELECT IF( EXISTS ( SELECT ID_adresse FROM adresse INNER JOIN ville ON ville.idv = adresse.idv WHERE ville = '".$_GET['Ville']."' AND adresseA='".$_GET['Adresse']."'),1,0);");
if ($test == true){
    $StockAdresse = $connexion->GetFirstRow("SELECT ID_adresse FROM adresse INNER JOIN ville ON ville.idv = adresse.idv WHERE ville = '".$_GET['Ville']."' AND adresseA = '".$_GET['Adresse']."';");    
}else {
    $test2 = $connexion->Set("SELECT IF( EXISTS ( SELECT idv FROM ville WHERE ville = '".$_GET['Ville']."'),1,0);");
    if($test2==true){
        $StockVille = $connexion->GetFirstRow("SELECT idv FROM ville WHERE ville = '".$_GET['Ville']."';");
        $requeteAdresse = $connexion->add("INSERT INTO Adresse(adresseA, complementA, idv) VALUES ('".$_GET['Adresse']."', '".$_GET['Complement']."', '".$StockVille[0]."')");
        $StockAdresse = $connexion->GetFirstRow("SELECT ID_adresse FROM adresse WHERE ville = '".$_GET['Ville']."' AND adresseA = '".$_GET['Adresse']."';");
    } else { 
        $requeteRegion = $connexion->add("INSERT INTO reg(reg) VALUES ('".$_GET['Region']."')");
        $StockRegion = $connexion->GetFirstRow("SELECT ID_reg FROM reg WHERE reg = '".$requeteRegion[0]."';");
        $requeteVille = $connexion->add("INSERT INTO ville(ville, Code_Post, ID_adresse) VALUES ('".$_GET['Ville']."','".$_GET['CP']."','".$StockRegion[0]."');");
        $StockVille = $connexion->GetFirstRow("SELECT idv FROM ville WHERE ville = '".$_GET['Ville']."';");
        $requeteAdresse = $connexion->add("INSERT INTO Adresse(adresseA, complementA, idv) VALUES ('".$_GET['Adresse']."', '".$_GET['Complement']."', '".$StockVille[0]."')");
        $StockAdresse = $connexion->GetFirstRow("SELECT ID_adresse FROM adresse WHERE ville = '".$_GET['Ville']."' AND adresseA = '".$_GET['Adresse']."';");    
    }
}

$roleUti = $connexion->GetFirstRow("SELECT role FROM utilisateur WHERE NomU = '".$_GET['Nom']."' AND PrenomU = '".$_GET['Prenom']."';");
if($roleUti[0] == 'etudiant'){
    if($_GET["Mot-de-passe"]!=""){
        $connexion->Update("UPDATE utilisateur INNER JOIN adresse ON utilisateur.ID_adresse=adresse.ID_adresse INNER JOIN ville ON ville.idv=adresse.idv INNER JOIN reg ON reg.ID_reg=ville.ID_reg  SET MdpU='".$_GET["Mot-de-passe"]."',
        NomU='".$_GET["Nom"]."',
        PrenomU='".$_GET["Prenom"]."',
        Date_NaisU='".$_GET["Date-naissance"]."',
        MailU='".$_GET["Mail"]."',
        role='".$_GET["Role"]."',
        utilisateur.ID_adresse='".$StockAdresse[0]."' WHERE utilisateur.IDu ='".$_GET["IDu"]."';");
    
    }
    else{
        $connexion->Update("UPDATE utilisateur INNER JOIN adresse ON utilisateur.ID_adresse=adresse.ID_adresse INNER JOIN ville ON ville.idv=adresse.idv INNER JOIN reg ON reg.ID_reg=ville.ID_reg SET NomU='".$_GET["Nom"]."',
        PrenomU='".$_GET["Prenom"]."',
        Date_NaisU='".$_GET["Date-naissance"]."',
        MailU='".$_GET["Mail"]."',
        role='".$_GET["Role"]."',
        utilisateur.ID_adresse='".$StockAdresse[0]."' WHERE utilisateur.IDu ='".$_GET["IDu"]."';");
    }
} else {
    if($_GET["Mot-de-passe"]!=""){
        $connexion->Update("UPDATE utilisateur INNER JOIN adresse ON utilisateur.ID_adresse=adresse.ID_adresse INNER JOIN ville ON ville.idv=adresse.idv INNER JOIN reg ON reg.ID_reg=ville.ID_reg SET MdpU='".$_GET["Mot-de-passe"]."',
        NomU='".$_GET["Nom"]."',
        PrenomU='".$_GET["Prenom"]."',
        Date_NaisU='".$_GET["Date-naissance"]."',
        MailU='".$_GET["Mail"]."',
        role='".$_GET["Role"]."',
        utilisateur.ID_adresse='".$StockAdresse[0]."' WHERE utilisateur.IDu ='".$_GET["IDu"]."';");
    
    }
    else{
        $connexion->Update("UPDATE utilisateur INNER JOIN adresse ON utilisateur.ID_adresse=adresse.ID_adresse INNER JOIN ville ON ville.idv=adresse.idv INNER JOIN reg ON reg.ID_reg=ville.ID_reg  SET NomU='".$_GET["Nom"]."',
        PrenomU='".$_GET["Prenom"]."',
        Date_NaisU='".$_GET["Date-naissance"]."',
        MailU='".$_GET["Mail"]."',
        role='".$_GET["Role"]."',
        utilisateur.ID_adresse='".$StockAdresse[0]."' WHERE utilisateur.IDu ='".$_GET["IDu"]."';");
    }
}

header('Location: ../../recherche_user/');
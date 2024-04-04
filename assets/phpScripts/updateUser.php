<?php
include "PDO.php";
if(!isset($_SESSION))
    {
        session_start();
    }
$connexion = new Sql($_SESSION["role"]);

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

$roleUti = $connexion->GetFirstRow("SELECT role FROM utilisateur WHERE NomU = '".$_GET['Nom']."' AND PrenomU = '".$_GET['Prenom']."';");
if($roleUti[0] == 'Etudiant'){
    if($_GET["Mot-de-passe"]!=""){
        $connexion->Update("UPDATE utilisateur INNER JOIN adresse ON utilisateur.ID_adresse=adresse.ID_adresse INNER JOIN ville ON ville.idv=adresse.idv INNER JOIN reg ON reg.ID_reg=ville.ID_reg  SET MdpU='".password_hash($_GET["Mot-de-passe"],PASSWORD_DEFAULT)."',
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
        $connexion->Update("UPDATE utilisateur INNER JOIN adresse ON utilisateur.ID_adresse=adresse.ID_adresse INNER JOIN ville ON ville.idv=adresse.idv INNER JOIN reg ON reg.ID_reg=ville.ID_reg SET MdpU='".password_hash($_GET["Mot-de-passe"],PASSWORD_DEFAULT)."',
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
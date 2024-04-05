<?php
include "PDO.php";
if(!isset($_SESSION))
    {
        session_start();
    }
$connexion = new Sql($_SESSION["role"]);

$IDE = $connexion->GetFirstRow("SELECT IDE FROM Entreprise WHERE NomE = '".$_GET['Nom']."';");
 
$test = $connexion->GetFirstRow("SELECT IF( EXISTS ( SELECT ID_adresse FROM adresse INNER JOIN ville ON ville.idv = adresse.idv WHERE ville = '".$_GET['Ville']."' AND adresseA='".$_GET['Adresse']."'),1,0);");
if ($test[0] == 0){
    $test2 = $connexion->GetFirstRow("SELECT IF( EXISTS ( SELECT idv FROM ville WHERE ville = '".$_GET['Ville']."'),1,0);");
    if($test2[0]== 0){
        $StockRegion = $connexion->GetFirstRow("SELECT ID_reg FROM reg WHERE reg = '".$_GET['Region']."';");
        $requeteVille = $connexion->add("INSERT INTO ville(ville, Code_Post, ID_reg) VALUES ('".$_GET['Ville']."','".$_GET['CP']."','".$StockRegion[0]."');");
    }
}
$StockVille = $connexion->GetFirstRow("SELECT idv FROM ville WHERE ville = '".$_GET['Ville']."';");
$requeteAdresse = $connexion->add("INSERT INTO Adresse(adresseA, idv) VALUES ('".$_GET['Adresse']."', '".$StockVille[0]."')");
$StockAdresse = $connexion->GetFirstRow("SELECT ID_adresse FROM adresse INNER JOIN ville ON ville.idv = adresse.idv WHERE ville = '".$_GET['Ville']."' AND adresseA = '".$_GET['Adresse']."';");    

$idsect=$connexion->GetFirstRow("SELECT IdSec FROM secteur_activite WHERE Secteur_Act='".$_GET["Secteur_Act"]."';");

$connexion->Update("UPDATE entreprise INNER JOIN adresse ON entreprise.ID_adresse=adresse.ID_adresse INNER JOIN ville ON ville.idv=adresse.idv INNER JOIN reg ON reg.ID_reg=ville.ID_reg INNER JOIN Secteur_activite ON Secteur_activite.IdSec=entreprise.IdSec SET NomE='".$_GET["Nom"]."',
MailE='".$_GET["Mail"]."',
TelE='".$_GET["Tel"]."',
Site='".$_GET["site"]."',
entreprise.idSec='".$idsect[0]."',
descr='".$_GET["descr"]."',
entreprise.ID_adresse='".$StockAdresse[0]."',
N_siret='".$_GET["SIRET"]."' WHERE IDE ='".$IDE[0]."';");

var_dump($_GET);

header('Location: http://presquauchaud.ddns.net/recherche_Entreprise/');
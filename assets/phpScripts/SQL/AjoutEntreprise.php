<?php
include "../PDO.php";
if(!isset($_SESSION))
    {
        session_start();
    }
$connexion = new Sql($_SESSION["role"]);

$test = $connexion->GetFirstRow("SELECT IF( EXISTS ( SELECT * FROM adresse WHERE nomA = '".$_GET['Nom']."' OR N_siret = '".$_GET['Siret']."'),1,0);");
if ($test[0] == 1){
    echo "Entreprise déjà existante";
}
else{
    $test2 = $connexion->GetFirstRow("SELECT IF( EXISTS ( SELECT ID_adresse FROM adresse INNER JOIN ville ON ville.idv = adresse.idv WHERE ville = '".$_GET['Ville']."' AND adresseA='".$_GET['Adresse']."'),1,0);");
    if ($test2[0] == 0){
        $test3 = $connexion->GetFirstRow("SELECT IF( EXISTS ( SELECT idv FROM ville WHERE ville = '".$_GET['Ville']."'),1,0);");
    if($test3[0]== 1){
        $StockVille = $connexion->GetFirstRow("SELECT idv FROM ville WHERE ville = '".$_GET['Ville']."';");
        $requeteAdresse = $connexion->add("INSERT INTO Adresse(adresseA, complementA, idv) VALUES ('".$_POST['Adresse']."', '".$_POST['Complement']."', '".$StockVille[0]."')");
    } else { 
        $StockRegion = $connexion->GetFirstRow("SELECT ID_reg FROM reg WHERE reg = '".$_GET['Region']."';");
        $requeteVille = $connexion->add("INSERT INTO ville(ville, Code_Post, ID_adresse) VALUES ('".$_POST['Ville']."','".$_POST['CP']."','".$StockRegion[0]."');");
        $StockVille = $connexion->GetFirstRow("SELECT idv FROM ville WHERE ville = '".$_GET['Ville']."';");
        $requeteAdresse = $connexion->add("INSERT INTO Adresse(adresseA, complementA, idv) VALUES ('".$_POST['Adresse']."', '".$_POST['Complement']."', '".$StockVille[0]."')");
    }
}
$Secteur = $connexion->GetFirstRow("SELECT idSec FROM Secteur_activite WHERE Secteur_Act = '".$_GET['Secteur_Act']."';")
$Entreprise = $connexion->add("INSERT INTO entreprise (NomE, descr, MailE, TelE, Site, N_siret, IdSec, ID_adresse VALUES ('".$_GET['Nom']."', '".$_GET['Description']."', '".$_GET['Mail']."', '".$_GET['Num_Tel']."', '".$_GET['Site_Internet']."', '".$_GET['Siret']."', '".$Secteur."', '".$requeteAdresse[0]."';");
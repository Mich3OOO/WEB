<?php
include "../PDO.php";
if(!isset($_SESSION))
    {
        session_start();
    }
$connexion = new Sql($_SESSION["role"]);
var_dump($_GET["Nom"]);

$test = $connexion->GetFirstRow("SELECT IF( EXISTS ( SELECT * FROM entreprise WHERE NomE = '".$_GET['Nom']."' OR N_siret = '".$_GET['Siret']."'),1,0);");
if ($test[0] == 1){
    $message = "Entreprise déjà existante";
    echo "<script>console.log('$message');</script>"; 
}
else{
    $test2 = $connexion->GetFirstRow("SELECT IF( EXISTS ( SELECT ID_adresse FROM adresse INNER JOIN ville ON ville.idv = adresse.idv WHERE ville = '".$_GET['Ville']."' AND adresseA='".$_GET['Adresse']."'),1,0);");
    if ($test2[0] == 0){
        $test3 = $connexion->GetFirstRow("SELECT IF( EXISTS ( SELECT idv FROM ville WHERE ville = '".$_GET['Ville']."'),1,0);");
    if($test3[0]== 1){
        
    } else { 
        $StockRegion = $connexion->GetFirstRow("SELECT ID_reg FROM reg WHERE reg = '".$_GET['Region']."';");
        $requeteVille = $connexion->add("INSERT INTO ville(ville, Code_Post, ID_adresse) VALUES ('".$_GET['Ville']."','".$_GET['CP']."','".$StockRegion[0]."');");
       
    }
    }
    $StockVille = $connexion->GetFirstRow("SELECT idv FROM ville WHERE ville = '".$_GET['Ville']."';");
    $requeteAdresse = $connexion->add("INSERT INTO Adresse(adresseA, idv) VALUES ('".$_GET['Adresse']."', '".$StockVille[0]."')");
}
$Secteur = $connexion->GetFirstRow("SELECT idSec FROM Secteur_activite WHERE Secteur_Act = '".$_GET['Secteur_Act']."';");
var_dump($Secteur);
$Entreprise = $connexion->add("INSERT INTO entreprise (NomE, descr, MailE, TelE, Site, N_siret, IdSec, ID_adresse VALUES ('".$_GET['Nom']."', '".$_GET['Description']."', '".$_GET['Mail']."', '".$_GET['Num_Tel']."', '".$_GET['Site_Internet']."', '".$_GET['Siret']."', '".$Secteur[0]."', '".$requeteAdresse."');");
?>
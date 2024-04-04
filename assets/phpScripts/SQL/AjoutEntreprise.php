<?php
include "../PDO.php";
if(!isset($_SESSION))
    {
        session_start();
    }
$connexion = new Sql($_SESSION["role"]);

$test = $connexion->GetFirstRow("SELECT IF( EXISTS (SELECT * FROM entreprise  WHERE NomE = '".$_GET['Nom']."' OR N_siret = '".$_GET['Siret']."'),1,0);");
if ($test == 1){
    echo 'Entreprise existe déjà';
}else {
    $test = $connexion->GetFirstRow("SELECT adresseA FROM adresse INNER JOIN ville ON ville.idv = adresse.idv WHERE adresseA ='".$_GET['Adresse']."' AND ville = '".$_GET['Ville']."';");
    if ($test == 1){
        $StockAdresse = $connexion->GetFirstRow("SELECT ID_adresse FROM adresse INNER JOIN ville ON ville.idv = adresse.idv WHERE ville = '".$_GET['Ville']."' AND adresseA = '".$_GET['Adresse']."';"); 
        $Ville = $connexion->add("INSER INTO ville (ville, Code_Post) VALUES('".$_POST['Ville']."','".$_POST['CP']."');");  
        $StockVille = $$connexion->GetFirstRow("SELECT idv FROM ville WHERE ville = '".$_GET['Ville']."';");
        INSERT INTO adresse (idv) VALUES ($StockVille )
    }
    else{
        $test = $connexion->GetFirstRow("SELECT adresseA FROM adresse INNER JOIN ville ON ville.idv = adresse.idv WHERE adresseA ='".$_GET['Adresse']."' AND ville = '".$_GET['Ville']."';");
    }
    
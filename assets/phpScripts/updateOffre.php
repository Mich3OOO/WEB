<?php
include "PDO.php";
if(!isset($_SESSION))
    {
        session_start();
    }
$connexion = new Sql($_SESSION["role"]);

var_dump($_GET);   
$v=$connexion->GetFirstRow("SELECT IF( EXISTS (SELECT IDE from entreprise WHERE NomE = '".$_GET['Nom_Entreprise']."'),1,0);");
var_dump($v);    
$oldComp=$connexion->GetArray("SELECT IDComp FROM necessite WHERE IDoffre='".$_GET['ID']."';");

if($v[0]!=0){

    $requêteIDE = $connexion->GetFirstRow("SELECT IDE from entreprise WHERE NomE = '".$_GET['Nom_Entreprise']."' ;");
    
    $requêteOffre = $connexion->UPDATE("UPDATE offre SET Duree='".$_GET['Duree']."',Poste='".$_GET['Poste']."', remune='".$_GET['Renumeration']."', Nb_place='".$_GET['NB_Places']."', Descr='".$_GET['Description']."', IDE='".$requêteIDE["IDE"]."' WHERE Offre.IDoffre='".$_GET['ID']."';");
    // $requêteIDoffre = $connexion->GetFirstRow("SELECT IDoffre from offre WHERE Poste = '".$_GET['Poste']."'; ");
    $DeleteViser = $connexion->delete("DELETE FROM viser WHERE IDOffre = '".$_GET['ID']."';");
    $DeleteNecessite = $connexion->delete("DELETE FROM necessite WHERE IDOffre = '".$_GET['ID']."';");
    foreach($_GET["TypePromo"] as $promo ){
        
        $requêteIDT = $connexion->GetFirstRow("SELECT IDT from types_promotions WHERE Nom_du_Type = '".$promo."'; ");
        $idviser=$connexion->GetFirstRow("SELECT IF( EXISTS (SELECT IDoffre, IDT from viser WHERE IDoffre = '".$_GET['ID']."' AND IDT = '".$requêteIDT["IDT"]."'),1,0);");
        if($idviser[0]==0){
            $requête5 = $connexion->Set("INSERT INTO viser (IDoffre, IDT) VALUES('".$_GET['ID']."', '".$requêteIDT["IDT"]."');");
        }
    }
    foreach($_GET["Competences"] as $comp ){
        
        $requêteIDComp = $connexion->GetFirstRow("SELECT IDComp from Competences WHERE Comp = '".$comp."'; ");
            $idnecessite=$connexion->GetFirstRow("SELECT IF( EXISTS (SELECT IDoffre, IDComp from necessite WHERE IDoffre = '".$_GET['ID']."' AND IDComp = '".$requêteIDComp["IDComp"]."'),1,0);");
            if($idnecessite[0]==0){
                $requête5 = $connexion->Set("INSERT INTO necessite (IDoffre, IDComp) VALUES('".$_GET['ID']."', '".$requêteIDComp["IDComp"]."');");
            }
    }
   
   

    
} 
else {
    echo "L'entreprise n'existe pas ! Veuillez d'abord la créer !";
}
header('Location: http://presquauchaud.ddns.net/recherche/');
?>
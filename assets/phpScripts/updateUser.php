<?php
include "PDO.php";
$connexion = new Sql(1);
//$connexion->Update("UPDATE utilisateur,promotion,campus,adresse,ville,reg SET MdpU='".$_GET["Mot-de-passe"]."',NomU='".$_GET["Nom"]."',PrenomU='".$_GET["Prenom"]."',Date_NaisU='".$_GET["Date-naissance"]."',MailU='".$_GET["Mail"]."',role='".$_GET["Role"]."',adresseA='".$_GET["Adresse"]."',promotion='".$_GET["Promotion"]."',NomC='".$_GET["Campus"]."',Code_Post='".$_GET["CP"]."',ville='".$_GET["Ville"]."',reg='".$_GET["Region"]."' FROM utilisateur INNER JOIN adresse ON utilisateur.ID_adresse=adresse.ID_adresse INNER JOIN ville ON ville.idv=adresse.idv INNER JOIN reg ON reg.ID_reg=ville.ID_reg INNER JOIN promotion ON utilisateur.IDu=promotion.IDu INNER JOIN campus ON promotion.idCentre=campus.idCentre WHERE IDu ='".$_GET["IDu"]."';");
if($_GET["Mot-de-passe"]!=""){
    $connexion->Update("UPDATE utilisateur,promotion,campus,adresse,ville,reg  SET MdpU='".$_GET["Mot-de-passe"]."',NomU='".$_GET["Nom"]."',PrenomU='".$_GET["Prenom"]."',Date_NaisU='".$_GET["Date-naissance"]."',MailU='".$_GET["Mail"]."',role='".$_GET["Role"]."',adresseA='".$_GET["Adresse"]."',promotion='".$_GET["Promotion"]."',NomC='".$_GET["Campus"]."',Code_Post='".$_GET["CP"]."',ville='".$_GET["Ville"]."',reg='".$_GET["Region"]."' WHERE utilisateur.IDu ='".$_GET["IDu"]."';");
}
else{
    $connexion->Update("UPDATE utilisateur,promotion,campus,adresse,ville,reg  SET NomU='".$_GET["Nom"]."',PrenomU='".$_GET["Prenom"]."',Date_NaisU='".$_GET["Date-naissance"]."',MailU='".$_GET["Mail"]."',role='".$_GET["Role"]."',adresseA='".$_GET["Adresse"]."',promotion='".$_GET["Promotion"]."',NomC='".$_GET["Campus"]."',Code_Post='".$_GET["CP"]."',ville='".$_GET["Ville"]."',reg='".$_GET["Region"]."' WHERE utilisateur.IDu ='".$_GET["IDu"]."';");

}

header('Location: ../../recherche_user/');
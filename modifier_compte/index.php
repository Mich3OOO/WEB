<?php
require_once('../smarty/libs/Smarty.class.php');
include "../assets/phpScripts/PDO.php";
    
include "../assets/phpScripts/redirect.php";

$connexion = new Sql(1);
$smarty = new Smarty();

$smarty->assign('dirfile', '../tpl/modifier_compte.tpl');
$smarty->assign('dircss', '../assets/css/modifier_compte.css');
$smarty->assign('dirjs', '#');
$smarty->assign('titre', 'Modifier Compte');
$smarty->assign('keywords', 'algo');
$smarty->assign('description', 'algo');




$hash = $connexion->GetFirstRow("Select utilisateur.IDu,MdpU,NomU,PrenomU,Date_NaisU,MailU,role,adresseA,promotion,NomC,Code_Post,ville,reg from `utilisateur` INNER JOIN adresse ON utilisateur.ID_adresse=adresse.ID_adresse INNER JOIN ville ON ville.idv=adresse.idv INNER JOIN reg ON reg.ID_reg=ville.ID_reg INNER JOIN promotion ON utilisateur.IDu=promotion.IDu INNER JOIN campus ON promotion.idCentre=campus.idCentre where MailU ='".$_GET["email"]."';");


$usermodif["IDu"]= $hash[0] ;
$usermodif["MDP"]= $hash[1] ;
$usermodif["Nom"]= $hash[2] ;
$usermodif["Prenom"]= $hash[3] ;
$usermodif["Date_Nais"]= $hash[4] ;
$usermodif["Mail"]= $hash[5] ;
$usermodif["role"]= $hash[6] ;
$usermodif["Adresse"]= $hash[7];
$usermodif["promotion"]= $hash[8] ;
$usermodif["campus"]= $hash[9] ;
$usermodif["CP"]= $hash[10];
$usermodif["Ville"]= $hash[11] ;
$usermodif["Region"]= $hash[12] ;

//var_dump($usermodif);
      

$smarty->assign('usermodif', $usermodif);
$smarty->assign('_SESSION', $_SESSION);

$smarty->display("../assets/tpl/main.tpl");



?>
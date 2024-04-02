<?php
include "../assets/phpScripts/redirect.php";
include "../assets/phpScripts/PDO.php";
require_once('../smarty/libs/Smarty.class.php');

$connexion = new Sql(2);
$smarty = new Smarty();


$smarty->assign('dirfile', '../tpl/recherche_user.tpl');
$smarty->assign('dircss', '../assets/css/user.css');
$smarty->assign('dirjs', '#');
$smarty->assign('titre', 'Recherche de compte');
$smarty->assign('keywords', 'algo');
$smarty->assign('description', 'algo');

//var_dump($_SESSION);
if($_SESSION["role"]=="Administrateur"){
    $allutilisateur=$connexion->GetArray("SELECT NomU,PrenomU,Date_NaisU,MailU,role,AdresseA,promotion,NomC FROM utilisateur INNER JOIN promotion ON Utilisateur.IDu = promotion.IDu INNER JOIN campus ON campus.idCentre=promotion.idCentre INNER JOIN adresse ON Utilisateur.ID_adresse = adresse.ID_adresse INNER JOIN ville ON adresse.idv= ville.idv INNER JOIN reg ON ville.ID_reg = reg.ID_reg;");

}else{
    $allutilisateur=$connexion->GetArray("SELECT NomU,PrenomU,Date_NaisU,MailU,role,AdresseA,promotion,NomC FROM utilisateur INNER JOIN etudiant ON utilisateur.IDu=etudiant.IDu  INNER JOIN promotion ON etudiant.IDu = promotion.IDu INNER JOIN campus ON promotion.idCentre=Promotion.idCentre INNER JOIN adresse ON Utilisateur.ID_adresse = adresse.ID_adresse INNER JOIN ville ON adresse.idv= ville.idv INNER JOIN reg ON ville.ID_reg = reg.ID_reg;");

}
$allpromotion=$connexion->GetArray("SELECT DISTINCT promotion FROM promotion;");
$allcampus=$connexion->GetArray("SELECT DISTINCT NomC FROM campus;");

$smarty->assign('allutilisateur', $allutilisateur);
$smarty->assign('allcampus', $allcampus);
$smarty->assign('allpromotion', $allpromotion);
$smarty->assign('_SESSION', $_SESSION);
//var_dump($allutilisateur);
//var_dump($allpromotion);
$smarty->assign('_SESSION', $_SESSION);

$smarty->display("../assets/tpl/main.tpl");



?>
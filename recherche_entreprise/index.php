<?php
include "../assets/phpScripts/redirect.php";
include "../assets/phpScripts/PDO.php";
require_once('../smarty/libs/Smarty.class.php');

$connexion = new Sql(2);
$smarty = new Smarty();

$smarty->assign('dirfile', '../tpl/recherche_Entreprise.tpl');
$smarty->assign('dircss', '../assets/css/recherche_Entreprise.css');
$smarty->assign('dirjs', '#');
$smarty->assign('titre', 'acceuille');
$smarty->assign('keywords', 'algo');
$smarty->assign('description', 'algo');

$allentreprise=$connexion->GetArray("SELECT NomE,descr,MailE, TelE, Site,AdresseA,Secteur_Act FROM Entreprise INNER JOIN Secteur_Activite ON Entreprise.IDSec = Secteur_Activite.IDSec INNER JOIN adresse ON Entreprise.ID_adresse = adresse.ID_adresse INNER JOIN ville ON adresse.idv= ville.idv INNER JOIN reg ON ville.ID_reg = reg.ID_reg;");

$smarty->assign('allentreprise', $allentreprise);
$smarty->assign('_SESSION', $_SESSION);
//var_dump($allentreprise);

$smarty->display("../assets/tpl/main.tpl");



?>
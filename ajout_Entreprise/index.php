<?php
require_once('../smarty/libs/Smarty.class.php');

include "../assets/phpScripts/redirect.php";
include "../assets/phpScripts/PDO.php";

$connexion = new Sql(2);
$smarty = new Smarty();

$smarty->assign('dirfile', '../tpl/Ajout_Entreprise.tpl');
$smarty->assign('dircss', '../assets/css/ajout_entreprise.css');
$smarty->assign('dirjs', '#');
$smarty->assign('titre', 'Ajouter une entreprise');
$smarty->assign('keywords', 'algo');
$smarty->assign('description', 'algo');

$alltypesect=$connexion->GetArray("SELECT DISTINCT Secteur_Act FROM Secteur_activite;");



$smarty->assign('alltypesect', $alltypesect);


$smarty->assign('_SESSION', $_SESSION);

$smarty->display("../assets/tpl/main.tpl");

// nom descr mail tel site siret sectact adresse ville region cp
?>
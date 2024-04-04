<?php
require_once('../smarty/libs/Smarty.class.php');

include "../assets/phpScripts/redirect.php";
include "../assets/phpScripts/PDO.php";
if(!isset($_SESSION))
    {
        session_start();
    }
$connexion = new Sql($_SESSION["role"]);
$smarty = new Smarty();

$smarty->assign('dirfile', '../tpl/ajout_stage.tpl');
$smarty->assign('dircss', '../assets/css/stage.css');
$smarty->assign('dirjs', '../assets/js/script.js');
$smarty->assign('titre', 'Ajouter une offre de stage');
$smarty->assign('keywords', 'algo');
$smarty->assign('description', 'algo');

$alltypepromo=$connexion->GetArray("SELECT DISTINCT Nom_du_Type FROM types_promotions;");
$allpromotion=$connexion->GetArray("SELECT DISTINCT promotion FROM promotion;");
$allVille=$connexion->GetArray("SELECT DISTINCT ville FROM ville ;");
$allcomp=$connexion->GetArray("SELECT DISTINCT comp FROM competences;");

$smarty->assign('allcomp', $allcomp);
$smarty->assign('allVille', $allVille);
$smarty->assign('alltypepromo', $alltypepromo);
$smarty->assign('allpromotion', $allpromotion);

$smarty->assign('_SESSION', $_SESSION);

$smarty->display("../assets/tpl/main.tpl");



?>
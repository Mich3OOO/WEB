<?php
include "../assets/phpScripts/redirect.php";
require_once('../smarty/libs/Smarty.class.php');
include "../assets/phpScripts/PDO.php";
if(!isset($_SESSION))
    {
        session_start();
    }
$connexion = new Sql($_SESSION["role"]);
$smarty = new Smarty();

$smarty->assign('dirfile', '../tpl/ajouter_compte.tpl');
$smarty->assign('dircss', '../assets/css/profil.css');
$smarty->assign('dirjs', '../assets/js/script.js');
$smarty->assign('titre', 'Creer un compte');
$smarty->assign('keywords', 'algo');
$smarty->assign('description', 'algo');

$alltypepromo=$connexion->GetArray("SELECT DISTINCT Nom_du_Type FROM types_promotions;");
$allpromotion=$connexion->GetArray("SELECT DISTINCT promotion FROM promotion;");
$allVille=$connexion->GetArray("SELECT DISTINCT ville FROM ville ;");
$allRole=$connexion->GetArray("SELECT DISTINCT role FROM utilisateur ;");
$allcampus=$connexion->GetArray("SELECT DISTINCT ville,ville.idv FROM ville INNER JOIN Classe ON ville.idv = Classe.idv;");


$smarty->assign('allcampus', $allcampus);
$smarty->assign('allRole', $allRole);
$smarty->assign('allVille', $allVille);
$smarty->assign('alltypepromo', $alltypepromo);
$smarty->assign('allpromotion', $allpromotion);

$smarty->assign('_SESSION', $_SESSION);

$smarty->display("../assets/tpl/main.tpl");



?>
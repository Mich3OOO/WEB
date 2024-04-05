
<?php
require_once('../smarty/libs/Smarty.class.php');

include "../assets/phpScripts/redirect.php";
$smarty = new Smarty();



$smarty->assign('dirfile', '../tpl/recherche.tpl');
$smarty->assign('dircss', '../assets/css/Connexion.css');
$smarty->assign('dirjs', '../assets/js/RechercheE.js');
$smarty->assign('titre', 'acceuille');
$smarty->assign('keywords', 'algo');
$smarty->assign('description', 'algo');
$smarty->assign('FiltresMC', array(array("ID" => "Ville","nom"=>"Ville :"),array("ID" => "reg","nom"=>"région :"), array("ID" => "secteur","nom"=>"Secteur d'activité :")));
$smarty->assign('FiltresUC', array());



$smarty->assign('_SESSION', $_SESSION);

$smarty->display("../assets/tpl/main.tpl");



?>


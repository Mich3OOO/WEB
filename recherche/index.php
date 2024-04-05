<?php
require_once('../smarty/libs/Smarty.class.php');

include "../assets/phpScripts/redirect.php";
$smarty = new Smarty();

$smarty->assign('dirfile', '../tpl/recherche.tpl');
$smarty->assign('dircss', '../assets/css/Connexion.css');
$smarty->assign('dirjs', '../assets/js/Connexion.js');
$smarty->assign('titre', 'acceuille');
$smarty->assign('keywords', 'algo');
$smarty->assign('description', 'algo');
$smarty->assign('FiltresMC', array(array("ID" => "Ville","nom"=>"Ville :"),array("ID" => "Département","nom"=>"Département :"),array("ID" => "SécteurA","nom"=>"Sécteur d'activitée :"),array("ID" => "Prom","nom"=>"Promotion concernée :")));
$smarty->assign('FiltresUC', array(array("ID" => "Date_début","nom"=>"Offres à partir du :","type"=> "date"),array("ID" => "durée","nom"=>"durée (en mois) :","type"=> "number")));



$smarty->assign('_SESSION', $_SESSION);

$smarty->display("../assets/tpl/main.tpl");



?>
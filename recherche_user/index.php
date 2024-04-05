
<?php
require_once('../smarty/libs/Smarty.class.php');

include "../assets/phpScripts/redirect.php";
$smarty = new Smarty();

$Uchoise = array();
if ($_SESSION["role"] == "Administrateur")
{
    $Uchoise = array(array("ID" => "etudiant","nom"=>"Étudiants","type"=> "checkbox"),array("ID" => "Pilote","nom"=>"Pilotes","type"=> "checkbox"),array("ID" => "Admin","nom"=>"Administrateur","type"=> "checkbox"));
}
//etudiant,Pilote,Admin,Promotion,Campus

$smarty->assign('dirfile', '../tpl/recherche.tpl');
$smarty->assign('dircss', '../assets/css/Connexion.css');
$smarty->assign('dirjs', '../assets/js/RechercheU.js');
$smarty->assign('titre', 'acceuille');
$smarty->assign('keywords', 'algo');
$smarty->assign('description', 'algo');
$smarty->assign('FiltresMC', array(array("ID" => "Promotion","nom"=>"Promotions :"),array("ID" => "Campus","nom"=>"Campus :")));
$smarty->assign('FiltresUC', $Uchoise);



$smarty->assign('_SESSION', $_SESSION);

$smarty->display("../assets/tpl/main.tpl");



?>
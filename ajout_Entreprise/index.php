<?php
require_once('../smarty/libs/Smarty.class.php');

include "../assets/phpScripts/redirect.php";
$smarty = new Smarty();

$smarty->assign('dirfile', '../html/Ajout_Entreprise.html');
$smarty->assign('dircss', '../assets/css/ajout_entreprise.css');
$smarty->assign('dirjs', '#');
$smarty->assign('titre', 'Ajouter une entreprise');
$smarty->assign('keywords', 'algo');
$smarty->assign('description', 'algo');

$smarty->assign('_SESSION', $_SESSION);

$smarty->display("../assets/tpl/main.tpl");


?>
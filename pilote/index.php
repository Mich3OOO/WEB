<?php
require_once('../smarty/libs/Smarty.class.php');

include "../assets/phpScripts/redirect.php";
$smarty = new Smarty();

$smarty->assign('dirfile', '../html/pilote.html');
$smarty->assign('dircss', '../assets/css/Pilote.css');
$smarty->assign('dirjs', '#');
$smarty->assign('titre', 'Recherche Offre Stage');
$smarty->assign('keywords', 'algo');
$smarty->assign('description', 'algo');

$smarty->assign('_SESSION', $_SESSION);


$smarty->display("../assets/tpl/main.tpl");



?>
<?php
require_once('../smarty/libs/Smarty.class.php');

include "../assets/phpScripts/redirect.php";
$smarty = new Smarty();

$smarty->assign('dirfile', '../html/stats.html');
$smarty->assign('dircss', '../assets/css/stats.css');
$smarty->assign('dirjs', '../assets/js/stats.js');
$smarty->assign('titre', 'Statistique');
$smarty->assign('keywords', 'Statistique promotions offres entreprises');
$smarty->assign('description', 'Statistique sur le promotions les offres et les entreprises');

$smarty->assign('_SESSION', $_SESSION);

$smarty->display("../assets/tpl/main.tpl");

?>
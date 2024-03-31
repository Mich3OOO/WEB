<?php
require_once('../smarty/libs/Smarty.class.php');

include "../assets/phpScripts/redirect.php";
$smarty = new Smarty();

$smarty->assign('dirfile', '../html/postuler.html');
$smarty->assign('dircss', '../assets/css/postuler.css');
$smarty->assign('dirjs', '#');
$smarty->assign('titre', 'Postuler');
$smarty->assign('keywords', 'algo');
$smarty->assign('description', 'algo');

$smarty->assign('_SESSION', $_SESSION);

$smarty->display("../assets/tpl/main.tpl");



?>
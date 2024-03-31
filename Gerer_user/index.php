<?php
include "../assets/phpScripts/redirect.php";
require_once('../smarty/libs/Smarty.class.php');

$smarty = new Smarty();

$smarty->assign('dirfile', '../html/gerer_user.html');
$smarty->assign('dircss', '../assets/css/.css');
$smarty->assign('dirjs', '#');
$smarty->assign('titre', 'Gerer user');
$smarty->assign('keywords', 'algo');
$smarty->assign('description', 'algo');

$smarty->assign('_SESSION', $_SESSION);

$smarty->display("../assets/tpl/main.tpl");



?>
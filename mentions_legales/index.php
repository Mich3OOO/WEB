<?php
require_once('../smarty/libs/Smarty.class.php');
include "../assets/phpScripts/redirect.php";

$smarty = new Smarty();

$smarty->assign('dirfile', '../html/mentions_legales.html');
$smarty->assign('dircss', '../assets/css/mentions_legales.css');
$smarty->assign('dirjs', '#');
$smarty->assign('titre', 'accueille');
$smarty->assign('keywords', 'algo');
$smarty->assign('description', 'algo');

$smarty->assign('_SESSION', $_SESSION);

$smarty->display("../assets/tpl/main.tpl");



?>
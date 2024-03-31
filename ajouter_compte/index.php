<?php
include "../assets/phpScripts/redirect.php";
require_once('../smarty/libs/Smarty.class.php');

$smarty = new Smarty();

$smarty->assign('dirfile', '../html/ajouter_compte.html');
$smarty->assign('dircss', '../assets/css/profil.css');
$smarty->assign('dirjs', '#');
$smarty->assign('titre', 'Creer un compte');
$smarty->assign('keywords', 'algo');
$smarty->assign('description', 'algo');

$smarty->assign('_SESSION', $_SESSION);

$smarty->display("../assets/tpl/main.tpl");



?>
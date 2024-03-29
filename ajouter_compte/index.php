<?php
include "../assets/phpScripts/redirect.php";
require_once('../smarty/libs/Smarty.class.php');

$smarty = new Smarty();

$smarty->assign('name', 'ajouter_compte');
$smarty->assign('titre', 'acceuille');
$smarty->assign('keywords', 'algo');
$smarty->assign('description', 'algo');

$smarty->assign('_SESSION', $_SESSION);

$smarty->display("../assets/tpl/main.tpl");



?>
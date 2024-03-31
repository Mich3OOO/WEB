<?php
require_once('../smarty/libs/Smarty.class.php');

include "../assets/phpScripts/redirect.php";
$smarty = new Smarty();

$smarty->assign('dirfile', '../html/ajout_stage.html');
$smarty->assign('dircss', '../assets/css/stage.css');
$smarty->assign('dirjs', '#');
$smarty->assign('titre', 'Ajouter une offre de stage');
$smarty->assign('keywords', 'algo');
$smarty->assign('description', 'algo');

$smarty->assign('_SESSION', $_SESSION);

$smarty->display("../assets/tpl/main.tpl");



?>
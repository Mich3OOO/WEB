<?php
require_once('../smarty/libs/Smarty.class.php');


$smarty = new Smarty();

$smarty->assign('dirfile', '../html/wishlist.html');
$smarty->assign('dircss', '../assets/css/wishlist.css');
$smarty->assign('dirjs', '#');
$smarty->assign('titre', 'accueille');
$smarty->assign('keywords', 'algo');
$smarty->assign('description', 'algo');

$smarty->assign('_SESSION', $_SESSION);

$smarty->display("../assets/tpl/main.tpl");



?>
<?php
require_once('../smarty/libs/Smarty.class.php');
include "../assets/phpScripts/redirect.php";


$smarty = new Smarty();

$smarty->assign('dirfile', '../html/wishlist.html');
$smarty->assign('dircss', '../assets/css/wishlist.css');
$smarty->assign('dirjs', '../assets/js/wishlist.js');
$smarty->assign('titre', 'Wishlist');
$smarty->assign('keywords', 'Wishlist favoris stage');
$smarty->assign('description', 'Wishlist des offres');

$smarty->assign('_SESSION', $_SESSION);

$smarty->display("../assets/tpl/main.tpl");



?>
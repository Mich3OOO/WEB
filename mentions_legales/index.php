<?php
require_once('../smarty/libs/Smarty.class.php');
include "../assets/phpScripts/redirect.php";

$smarty = new Smarty();

$smarty->assign('PHTML', 'mentions_legales.html');

$smarty->display("../assets/tpl/main.tpl");



?>
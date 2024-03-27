<?php
include "../assets/phpScripts/redirect.php";
require_once('../smarty/libs/Smarty.class.php');

$smarty = new Smarty();

$smarty->assign('PHTML', 'Gerer_user.html');

$smarty->display("../assets/tpl/main.tpl");



?>
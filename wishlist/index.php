<?php
require_once('../smarty/libs/Smarty.class.php');


$smarty = new Smarty();

$smarty->assign('PHTML', 'Connexion.html');

$smarty->display("../assets/tpl/main.tpl");



?>
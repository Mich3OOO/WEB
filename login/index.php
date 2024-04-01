<?php

require_once('../smarty/libs/Smarty.class.php');
session_start();
if (isset($_SESSION["IDu"])) {
    header('Location: ./recherche/');
}

$smarty = new Smarty();


$smarty->display("../assets/tpl/auth.tpl");

?>
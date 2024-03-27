<?php
#define('SMARTY_DIR', './smarty/libs/');



session_start();
if (isset($_SESSION["IDu"])) {
    header('Location: ./recherche/');
}
else
{
    header('Location: ./login/');
}

?>
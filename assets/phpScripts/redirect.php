<?php
    session_start();
    if (!isset($_SESSION["IDu"])) {
        header('Location: ./../login/');
    }
?>
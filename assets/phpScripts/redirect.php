<?php
    session_start();
    if (!isset($_SESSION["IDu"])) {
        header('Location: ./../login/');
    }
    
        setcookie("role",$_SESSION["role"],time()+3600*4);
?>
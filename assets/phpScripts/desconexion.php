<?php
    session_start();
    session_status();
    session_unset();
    session_gc();
    header("Location: ../../Authentification.php")
?>
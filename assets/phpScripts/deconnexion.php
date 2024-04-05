<?php

    if (isset($_COOKIE['role'])) {
        unset($_COOKIE['role']); 
        setcookie('role', '', time()-23*60*60);
    }
    session_start();
    session_status();
    session_unset();
    session_gc();
    //var_dump($_COOKIE);
    header("Location: http://presquauchaud.ddns.net")
?>  
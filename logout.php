<?php
    session_start();
    session_unset();
    session_destroy();
    setcookie("remember_me","", time() - 3600,"/");
    Header("Location: login.php");
    exit();
?>
<?php
    session_start();
    //Si no está "logueado", lo mandamos a la página de login
    if(!isset($_SESSION["logged"])){
        header("location: login.php");
    }
?>
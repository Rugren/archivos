<?php
    session_start();
    $_SESSION["logged"]=false;            
    $_SESSION["username"]="";
    session_destroy();
    header("location: index.php");
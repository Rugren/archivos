<?php
    //$conexion=new mysqli("localhost", "root", "", "mibasededatos");

    define("HOST_DB", "localhost");
    define("USER_DB", "root");
    define("PASS_DB", "");
    define("NAME_DB", "repaso");
 
    $conexion = new mysqli(
        constant("HOST_DB"),
        constant("USER_DB"),
        constant("PASS_DB"),
        constant("NAME_DB")
    );
 
?>
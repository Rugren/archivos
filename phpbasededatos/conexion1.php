<?php
    // PARA LA CONEXIÓN DEBEMOS CREAR PREVIAMENE LA BBDD EN MYSQL
    $usuario="root";
    $password="";
    $basededatos="mibasededatos";
    $conexion = new mysqli("localhost", $usuario, $password, $basededatos);    
    if ($conexion->connect_errno) {
        die("error de conexión: " . $conexion->connect_error);
    }
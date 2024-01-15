<?php
        // //Conectamos con el servidor 
        // $conexion=new mysqli("localhost", "root", "");

        // //Creamos la base de datos si no existe
        // $consulta="CREATE DATABASE IF NOT EXISTS crudfichaje;";
        // $conexion->query($consulta);
    
        // //Seleccionamos la base de datos y creamos la tabla si no existe
        // $conexion->select_db("crudfichaje");

        // *NO CREABA LA TABLA trabajadores así que la creamos a mano dentro de phpMyAdmin: hemos puesto, id, nombre, email, avatar y departamento.
        // $consulta="CREATE TABLE IF NOT EXISTS trabajadores (
        // id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        //     nombre VARCHAR(30) NOT NULL,
        //     email VARCHAR(50) NOT NULL,
        //     avatar VARCHAR(50),
        //     departamento VARCHAR(100),
        //   );";
        // $conexion->query($consulta);

        $usuario="root";
        $password="";
        $basededatos="crudfichaje";
        $conexion = new mysqli("localhost", $usuario, $password, $basededatos);    
        if ($conexion->connect_errno) {
            die("error de conexión: " . $conexion->connect_error);
        }
<?php
    //Conectamos con el servidor 
    $conexion=new mysqli("localhost", "adrian", "Murcia2023", "h0122u0007_adrian");

    //Creamos la base de datos si no existe
    /*$consulta="CREATE DATABASE IF NOT EXISTS h0122u0007_adrian;";
    $conexion->query($consulta);
    $conexion->select_db("h0122u0007_adrian");*/

    $consulta="CREATE TABLE IF NOT EXISTS equipos (
        id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        nombre VARCHAR(30) NOT NULL,
        observaciones TEXT        
      );";
    $conexion->query($consulta);

    /*$consulta= "INSERT INTO equipos (nombre, observaciones) VALUES ('Nottingham Prisa', 'Buena gente. Manolo, María, Benito')";
    $conexion->query($consulta);

    $consulta= "INSERT INTO equipos (nombre, observaciones) VALUES ('Maccabi de Levantar', 'Buenos. Arvydas, Drazen, Chacho')";
    $conexion->query($consulta);

    $consulta= "INSERT INTO equipos (nombre, observaciones) VALUES ('Inter Mitente', 'El último día no pagaron la pista. Audie, Carmen, Roberto')";
    $conexion->query($consulta);*/
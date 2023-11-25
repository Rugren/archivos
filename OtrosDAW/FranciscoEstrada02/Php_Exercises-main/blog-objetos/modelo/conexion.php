<?php
    $conexion = new mysqli("localhost", "root", "");
    
    $consulta = "CREATE DATABASE IF NOT EXISTS blog;";
    $conexion->query($consulta);
    
    $conexion->select_db("blog");
    $consulta="CREATE TABLE IF NOT EXISTS articulos (
        id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        titulo VARCHAR(255) NOT NULL,
        contenido TEXT,
        imagen VARCHAR(255) NOT NULL,
        fecha DATE,
        destacado INT(11) NOT NULL
      );";
    $conexion->query($consulta);
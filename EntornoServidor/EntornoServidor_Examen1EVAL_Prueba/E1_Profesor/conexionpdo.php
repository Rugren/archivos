<?php
    $basededatos="h0122u0007_adrian";
    try {
        $dsn = "mysql:host=localhost;dbname=$basededatos";
        $usuariobd="adrian";
        $password="Murcia2023";
        $conexion = new PDO($dsn, $usuariobd, $password);
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e){
        echo $e->getMessage();
    }

    $consulta="CREATE TABLE IF NOT EXISTS jugadores (
        id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        nombre VARCHAR(30) NOT NULL,
        observaciones TEXT        
      );";
    $conexion->exec($consulta);
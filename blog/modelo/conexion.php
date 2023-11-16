<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "blog"; // Crear en la base de datos el nombre de blog

    $conexion = new mysqli($servername, $username, $password, $dbname);

    // si en el otro hemos puesto $textoSQL en vez de $consulta no influye, porque aquí es otro distinto
    $consulta = "CREATE TABLE IF NOT EXISTS articulos (
        id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        titulo VARCHAR(255) NOT NULL,
        contenido TEXT,
        imagen VARCHAR(255) NOT NULL,
        fecha DATE
      );";
    $conexion->query($consulta);
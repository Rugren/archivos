<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "blog"; // Crear en la base de datos el nombre de blog

    $conexion = new mysqli($servername, $username, $password, $dbname);
    // no creaba bien la base de datos blog en phpmyadmin, así que la creamos en phpmyadmin a mano

    // AQUÍ LO CONECTABA BIEN
    // //Conectamos con el servidor
    // $username = "root";
    // $conexion=new mysqli("localhost", "root", "");
    // $password = "";
    // $dbname = "blog"; // Crear en la base de datos el nombre de blog
 
    // $conexion = new mysqli($servername, $username, $password, $dbname);
    // //Creamos la base de datos si no existe
    // $consulta="CREATE DATABASE IF NOT EXISTS blog;";
    // $conexion->query($consulta);


    // si en el otro hemos puesto $textoSQL en vez de $consulta no influye, porque aquí es otro distinto
    $consulta = "CREATE TABLE IF NOT EXISTS articulos (
        id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        titulo VARCHAR(255) NOT NULL,
        contenido TEXT,
        imagen VARCHAR(255) NOT NULL,
        fecha DATE,
        destacado INT(11) NOT NULL
      );";
    $conexion->query($consulta);
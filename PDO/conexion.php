<?php

//Conectamos con el servidor 
$conexion = new mysqli("localhost", "root", "");

//Creamos la base de datos si no existe
$consulta = "CREATE DATABASE IF NOT EXISTS PDO;";
$conexion->query($consulta);


/* Cogido del archivo: C:\Users\rubga\OneDrive\Escritorio\CESUR - DAW 2º\2.0 MÓDULOS\Desarrollo web en entorno servidor\Temarios\PHP orientado a objetos
El archivo PDO 01.pdf */
$basededatos = "PDO";
try {
    $dsn = "mysql:host=localhost;dbname=$basededatos";
    $usuariobd = "root";
    $password = "";
    $conexion = new PDO($dsn, $usuariobd, $password);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo $e->getMessage();
}

$statement = 'CREATE TABLE IF NOT EXISTS clientes(
    id INT AUTO_INCREMENT,
    nombre VARCHAR(100) NOT NULL,
    ciudad VARCHAR(50) NULL, 
    PRIMARY KEY(id)
    );';
$conexion->exec($statement);
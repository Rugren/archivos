<?php


$usuario ="root";
$password ="";
$baseDeDatos = "mibasededatos";

$conexion = new mysqli("localhost", $usuario,$password, $baseDeDatos);

if($conexion -> connect_errno){
    die("Error de conexion" . $conexion->connect_errno);
}

$statment = 'CREATE TABLE IF NOT EXISTS clientes (
    id INT AUTO_INCREMENT,
    nombre VARCHAR(100) NOT NULL,
    ciudad VARCHAR(100) NULL,
    PRIMARY KEY(id),
);';

$conexion -> query ($statment);

$sql = "INSERT INTO clientes (nombre, ciudad) VALUES ('Tersa','Alcantarilla');";
$conexion -> query($sql);

$sql = "INSERT INTO clientes (nombre, ciudad) VALUES ('Manolo', 'Totana')";
$conexion -> query($sql);

echo "<h3>ID del ultimo registro insertado " . $conexion->insert_id . "</h3>";
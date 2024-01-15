<?php
// archivo MySQLi 01.pdf C:\Users\rubga\OneDrive\Escritorio\CESUR - DAW 2º\2.0 MÓDULOS\Desarrollo web en entorno servidor\Temarios\PHP Bases de datos

// Crear la conexión
$usuario = "root";
$password = "";
$basededatos = "mibasededatos"; // Creada mibasededatos con xampp MySQL 
$conexion = new mysqli("localhost", $usuario, $password, $basededatos);
if ($conexion->connect_errno) {
    die("error de conexión: " . $conexion->connect_error);
}


// http://localhost/archivos/phpbasededatos/phpmysql.php

// Crear tablas
$statement = 'CREATE TABLE IF NOT EXISTS clientes(
        id INT AUTO_INCREMENT,
        nombre VARCHAR(100) NOT NULL,
        ciudad VARCHAR(50) NULL, 
        PRIMARY KEY(id)
    );';

$conexion->query($statement);

// Insertar registros
$sql = "INSERT INTO clientes (nombre, ciudad) VALUES ('Teresa', 'La Unión');";
$conexion->query($sql);
$sql = "INSERT INTO clientes (nombre, ciudad) VALUES ('Peter', 'Molina de Segura');";
$conexion->query($sql);

echo "<h3>ID del último registro insertado: " . $conexion->insert_id . "</h3>";

// Modificar registros
$sql = "UPDATE clientes SET ciudad = 'Calasparra' WHERE nombre = 'Peter'";
$conexion->query($sql);

// Consultas con un resultado único y array asociativo
$consulta = "SELECT nombre, ciudad FROM clientes WHERE id = 2";
$resultado = $conexion->query($consulta);
$fila = $resultado->fetch_assoc();
$nombre = $fila["nombre"];
$ciudad = $fila["ciudad"];
echo "El usuario con id = 2 se llama $nombre y es de $ciudad" . "<br>";

// Consulta con varios resultados
$consulta = "SELECT * FROM clientes";
$resultado = $conexion->query($consulta);

// Ejemplo para imprimir los datos. El bucle recorre todos los registros.
while($fila = $resultado->fetch_assoc()) {
 echo "ID: " . $fila['id'] . ", Nombre: " . $fila['nombre'] . ", Ciudad: " . $fila['ciudad'] . "<br>";
}

echo "<h2> Se han mostrado " . $resultado->num_rows . " registros</h2>";




<?php

/* así no me iba
$servername = "localhost";
$username = "ruben";
$password = "Murcia2023";
$dbname = "piscina2023";

$conexion=new mysqli("localhost", "ruben", "Murcia2023", "piscina2023");

$conexion = new mysqli($servername, $username, $password, $dbname);
*/
$conexion=new mysqli("localhost", "ruben", "Murcia2023", "piscina2023");
// así si funcionó $conexion=new mysqli("localhost", "root", "");


//Creamos la base de datos si no existe
$consulta="CREATE DATABASE IF NOT EXISTS piscina2023;";
$conexion->query($consulta);

$conexion->select_db("piscina2023");

$consulta = "CREATE TABLE IF NOT EXISTS piscina2023 (
    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nombre_cliente VARCHAR(255) NOT NULL,
    entradas_adultos INT(11) NOT NULL,
    entradas_infantiles INT(11) NOT NULL,
    metodo_pago VARCHAR(50) NOT NULL,
    total_pago DECIMAL(8, 2) NOT NULL,
    fecha_compra DATE
  );";
$conexion->query($consulta);

// COMENTAR estos 2 campos, para que no vuelva a crear de nuevo a Maríai y Aniceto cada vez que recargue la página
// descomentado para entregar el ejercicio 
/* $consulta = "INSERT INTO piscina2023 (nombre_cliente, entradas_adultos, entradas_infantiles, metodo_pago, total_pago, fecha_compra)
    VALUES
    ('María Linares Benítez', 3, 2, 'Pago con tarjeta', (3 * 10 + 2 * 3), '2023/12/11'),
    ('Aniceto Baraja Montes', 2, 1, 'Pago en efectivo', (2 * 10 + 1 * 3), '2023/12/11')";
$conexion->query($consulta);
*/
?>

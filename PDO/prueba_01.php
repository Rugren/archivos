<?php

// Cogido del archivo: C:\Users\rubga\OneDrive\Escritorio\CESUR - DAW 2º\2.0 MÓDULOS\Desarrollo web en entorno servidor\Temarios\PHP orientado a objetos
// El archivo PDO 01.pdf

require_once "conexion.php";

// modificado VALUES (?, ?)"); por lo siguiente:    VALUES (:nombre, :ciudad)")
$stmt = $conexion->prepare("INSERT INTO Clientes (nombre, ciudad) VALUES (:nombre, :ciudad)");

/* ESTO COMENTADO PORQUE SINO "crearía un cliente" CADA VEZ QUE EJECUTAMOS EL ARCHIVO prueba_01.php
// Le doy un valor a las interrogaciones a través de unas variables
$nombre = "Peter";
$ciudad = "Madrid";
// * Y también hemos cambiado el 1 y 2 por ":nombre" y ":ciudad"
$stmt->bindParam(":nombre", $nombre);
$stmt->bindParam(":ciudad", $ciudad);
// Ejecuto la consulta para añadir el cliente
$stmt->execute();
*/

/* ESTO COMENTADO PORQUE SINO "nos actualizaría un cliente" CADA VEZ QUE EJECUTAMOS EL ARCHIVO prueba_01.php
$stmt = $conexion->prepare("UPDATE Clientes SET ciudad=? WHERE nombre=?");
 // Le doy un valor a las interrogaciones a través de unas variables
 $ciudad = "Sevilla";
 $nombre = "Peter";
 $stmt->bindParam(1, $ciudad);
 $stmt->bindParam(2, $nombre);
 // Ejecuto la consulta para añadir el cliente
 $stmt->execute();
*/


//  ESTE APARTADO NOS MUESTRA TODOS los Clientes listados en la base de datos PDO 
//  (el PDO::FETCH_ASSOC no tiene que ver con el nombre igual de la base de datos)
 $stmt = $conexion->prepare("SELECT * FROM Clientes");
 // Especificamos el fetch mode antes de llamar a fetch()
 $stmt->setFetchMode(PDO::FETCH_ASSOC);    
 // Ejecutamos
 $stmt->execute();
 // Mostramos los resultados
 while ($row = $stmt->fetch()){
     echo "Nombre: {$row["nombre"]} <br>";
     echo "Ciudad: {$row["ciudad"]} <br><br>";
 }


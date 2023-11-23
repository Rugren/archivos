<?php
/* Cogido del archivo: C:\Users\rubga\OneDrive\Escritorio\CESUR - DAW 2º\2.0 MÓDULOS\Desarrollo web en entorno servidor\Temarios\PHP orientado a objetos
El archivo PDO 01.pdf */

//  Hemos sustituido conexion baseDeDatos por conexion (aquí en conexionsqlite.php y en pruebassqlite.php)

/* HAY QUE DESCARGAR una base de datos que abra sqlite
Descargado: DB Browser for SQLite
https://sqlitebrowser.org/ 
https://sqlitebrowser.org/dl/
*/

$conexion = new PDO("sqlite:videojuegos.db");
$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$definicionTabla = "CREATE TABLE IF NOT EXISTS videojuegos(
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    anio INTEGER NOT NULL,
    titulo TEXT NOT NULL,
    genero TEXT NOT NULL
    );";
$resultado = $conexion->exec($definicionTabla);
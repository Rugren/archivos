<?php
/* Cogido del archivo: C:\Users\rubga\OneDrive\Escritorio\CESUR - DAW 2º\2.0 MÓDULOS\Desarrollo web en entorno servidor\Temarios\PHP orientado a objetos
El archivo PDO 01.pdf */

require_once "conexionsqlite.php";

$sentencia = $conexion->prepare("INSERT INTO videojuegos(anio, titulo, genero)
 VALUES(:anio, :titulo, :genero);");
$anio = 1999;
$titulo = "Encierros de Calasparra";
$genero = "Accion";
$sentencia->bindParam(":anio", $anio);
$sentencia->bindParam(":titulo", $titulo);
$sentencia->bindParam(":genero", $genero);
$resultado = $sentencia->execute();


/* Consulta SQLite (hay que abrir DB Browser for SQLite.exe 
y ahí coger la ruta con el archivo videojuegos.db que está en esta carpeta)
*/
$resultado = $baseDeDatos->query("SELECT * FROM videojuegos;");
 $videojuegos = $resultado->fetchAll(PDO::FETCH_OBJ);
foreach($videojuegos as $videojuego){ /*Notar la llave que dejamos abierta*/ ?>
<tr>
<td><?php echo $videojuego->titulo ?></td>
<td><?php echo $videojuego->anio ?></td>
<td><?php echo $videojuego->genero ?></td> 
</tr>
<?php } /*Cerrar llave, fin de foreach*/ ?>
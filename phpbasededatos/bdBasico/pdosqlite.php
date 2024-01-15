<?php
    $baseDeDatos = new PDO("sqlite:videojuegos.db");

    $baseDeDatos->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $definicionTabla = "CREATE TABLE IF NOT EXISTS videojuegos(
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        anio INTEGER NOT NULL,
        titulo TEXT NOT NULL,
        genero TEXT NOT NULL
    );";
    #Podemos usar $baseDeDatos porque incluimos el archivo que la crea
    $resultado = $baseDeDatos->exec($definicionTabla);    

    $sentencia = $baseDeDatos->prepare("INSERT INTO videojuegos(anio, titulo, genero)
	VALUES(:anio, :titulo, :genero);");

    $anio=1999;
    $titulo="Sopa de ganso";
    $genero="Comedia";
    $sentencia->bindParam(":anio", $anio);
    $sentencia->bindParam(":titulo", $titulo);
    $sentencia->bindParam(":genero", $genero);
    $resultado = $sentencia->execute();

    $resultado = $baseDeDatos->query("SELECT * FROM videojuegos;");
    $videojuegos = $resultado->fetchAll(PDO::FETCH_OBJ);
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Tabla estática</title>
	<style>
		table, th, td {
		    border: 1px solid black;
		}
	</style>
</head>
<body>
	<table>
		<thead>
			<tr>
				<th>Título</th>
				<th>Año</th>
				<th>Género</th>
			</tr>
		</thead>
		<tbody>
			<!-- Notar que siempre se repite lo que hay entre <tr> y </tr> -->
			<!-- Así que lo hacemos en un ciclo foreach -->

			<?php foreach($videojuegos as $videojuego){ /*Notar la llave que dejamos abierta*/ ?>
				<tr>
					<td><?php echo $videojuego->titulo ?></td>
					<td><?php echo $videojuego->anio ?></td>
					<td><?php echo $videojuego->genero ?></td>					
				</tr>
			<?php } /*Cerrar llave, fin de foreach*/ ?>

		</tbody>
	</table>
</body>
</html>
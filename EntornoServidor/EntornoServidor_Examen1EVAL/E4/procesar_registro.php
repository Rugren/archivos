<?php
// este procesar_registro.php es el editado y adaptado.
// no está bien

// Conectar a la base de datos (la ya creada del ejercicio 1)
$servername = "localhost";
$username = "ruben";
$password = "Murcia2023";
$dbname = "h0122u0007_ruben";

$conexion = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
} echo "Conectado con éxito";

// hay que poner una ruta para que sepa dónde está la bbdd porque creo que no la coge?
// aquí a la consulta le hemos puesto $sql en lugar de $consulta como en las otras.
$conexion->select_db("h0122u0007_ruben");
$sql="CREATE TABLE IF NOT EXISTS jugadores (
    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(30) NOT NULL,
    telefono NUMBER(20) NOT NULL,
    email VARCHAR(50),
    equipo VARCHAR(50) NOT NULL,
    -- rutaImagen VARCHAR(50)
    foto VARCHAR(50)
    );";
    $conexion->query($sql);


/* ********que tome los datos para que se metan en los equipos de la otra BBDD, ver cómo se hace: */

// Recibir datos del formulario
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono']; 
/* me va a coger en el index.html dónde está nuestro formulario, 
lo que ponga en el input con el mismo nombre, por ejemplo: name="telefono" igual que aquí el 'telefono' */
$email = $_POST['email'];
$equipo = $_POST['equipo'];

// Procesar la imagen
$nombreImagen = $_FILES['foto']['name'];
$rutaImagen = "/img" . $nombreImagen;

// Mover la imagen al servidor
move_uploaded_file($_FILES['foto']['tmp_name'], $rutaImagen);

// Insertar datos en la tabla de jugadores (el id no hace falta meterlo dentro)
$sql = "INSERT INTO jugadores (nombre, telefono, email, equipo, foto) VALUES ('$nombre', '$telefono', '$email', '$equipo', '$rutaImagen')";
// insertará en la BBDD los datos que le pasemos del formulario (el nombre, telefono, etc.)


/* Así lo pondríamos directamente: $conexion->query($sql);
Pero mejor hecho con este if */
if ($conexion->query($sql) === TRUE) {
    echo "Jugador agregado correctamente";
} else {
    echo "Error al agregar jugador: " . $conexion->error;
}

// Cerrar la conexión
$conexion->close();
?>

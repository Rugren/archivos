<?php
// Conectar a la base de datos (ajusta las credenciales según tu configuración)
$conexion = new mysqli("nombre_servidor", "usuario", "contrasena", "nombre_bd");

// Verificar la conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Recibir datos del formulario
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$equipo = $_POST['equipo'];

// Procesar la imagen
$nombreImagen = $_FILES['foto']['name'];
$rutaImagen = "carpeta_servidor/" . $nombreImagen;

// Mover la imagen al servidor
move_uploaded_file($_FILES['foto']['tmp_name'], $rutaImagen);

// Insertar datos en la tabla de jugadores
$sql = "INSERT INTO jugadores (nombre, telefono, email, equipo, foto) VALUES ('$nombre', '$telefono', '$email', '$equipo', '$rutaImagen')";

if ($conexion->query($sql) === TRUE) {
    echo "Jugador agregado correctamente";
} else {
    echo "Error al agregar jugador: " . $conexion->error;
}

// Cerrar la conexión
$conexion->close();
?>

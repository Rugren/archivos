<!-- Este procesar_envio.php creado yo -->

<?php
require_once "crud/conexion.php";
$textoSQL = "SELECT * FROM PRODUCTOS";
// crear una nueva tabla datosEnvio y cambiar arriba a FROM datosEnvio
$resultado = $conexion->query($textoSQL);
$producto = $resultado->fetch_object();

$titulo="Procesar Envío";
require_once "header.php";
?>

<main>
<h1>Procesar Envío</h1>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Aquí en cada apartado guardaría el nombre, apellidos, direccion, etc.
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $direccion = $_POST['direccion'];
    $ciudad = $_POST['ciudad'];
    $codigo_postal = $_POST['codigo_postal'];
    $telefono = $_POST['telefono'];

    // APARTADO DE GUARDADO DE DATOS CON LA SIGUIENTE ESTRUCTURA:
    // Aquí para guardar los datos de envío en la base de datos o realizar acciones según la información que nos escriban

    // Ejemplo de almacenamiento en la base de datos:
    // Realizar una conexión a la base de datos y ejecutar la consulta de inserción
    // Ejemplo: $query = "INSERT INTO tabla_datos_envio (nombre, apellidos, direccion, ciudad, codigo_postal, telefono) VALUES ('$nombre', '$apellidos', '$direccion', '$ciudad', '$codigo_postal', '$telefono')";
    
    // * CREAR tabla en la BD: datosEnvio y poner aquí (hacer bien cuando consiga ponerlo funcional el de procesar pago)
    
    // Ejecutar la consulta SQL

    // esto nos mostraría los campos guardados en la base de datos
    echo "Datos de envío guardados: <br>";
    echo "Nombre: " . $nombre . "<br>";
    echo "Apellidos: " . $apellidos . "<br>";
    echo "Dirección: " . $direccion . "<br>";
    echo "Ciudad: " . $ciudad . "<br>";
    echo "Código Postal: " . $codigo_postal . "<br>";
    echo "Teléfono: " . $telefono . "<br>";
}
?>

<!-- Formulario para seleccionar el método de pago -->
<form action="procesar_pago.php" method="post">
    <h2>Seleccione su método de pago:</h2>
    <input type="radio" name="metodo_pago" value="contra_reembolso"> Contra-reembolso<br>
    <input type="radio" name="metodo_pago" value="tarjeta_credito"> Tarjeta de Crédito<br>
    <input type="submit" value="Continuar">
</form>


</main>

</body>
</html>
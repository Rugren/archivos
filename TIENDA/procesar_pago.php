<!-- Este procesar_pago.php creado yo -->

<?php
require_once "crud/conexion.php";
$textoSQL = "SELECT * FROM metodosDePago";

$resultado = $conexion->query($textoSQL);
$producto = $resultado->fetch_object();

$titulo="Procesar Pago";
require_once "header.php";
?>

<main>
<h1>Procesar Pago</h1>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['metodo_pago'])) {
        $metodo_pago = $_POST['metodo_pago'];

        // Aquí puedes guardar el método de pago en la base de datos o realizar acciones según la selección
        // Ejemplo de almacenamiento en la base de datos:
        // Realizar una conexión a la base de datos y ejecutar la consulta de inserción
        // Ejemplo: $query = "INSERT INTO tabla_metodosDePago (metodo_pago) VALUES ('$metodo_pago')";
        
        echo "Método de pago seleccionado: " . $metodo_pago;
    } else {
        echo "Seleccione un método de pago válido";
    }
}
?>



<?php
//Seleccionamos la base de datos y creamos la tabla si no existe
    $conexion->select_db("tienda");
    $consulta="CREATE TABLE IF NOT EXISTS metodosDePago (
        id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        metodo_pago VARCHAR(255) NOT NULL,
        pagado_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
      );";
    $conexion->query($consulta);

    //Si la tabla está vacía, añadimos datos de ejemplo
    $consulta="SELECT metodo_pago FROM metodosDePago";
    $resultado=$conexion->query($consulta);
    if($resultado->num_rows<1){
        
        $consulta="INSERT INTO metodosDePago (metodo_pago, pagado_at)
        VALUES ('pago por defecto', '2023-11-12 00:01:00');";
    
        $conexion->query($consulta);
    };
    // Corregir desde $conexion->select_db("tienda"); hasta línea anterior, porque no los guarda en la base de datos. 
    ?>

</main>

</body>
</html>
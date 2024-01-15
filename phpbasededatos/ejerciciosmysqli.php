<?php
// require "conexion.php";
require_once "conexion1.php";
// A partir de ahora tengo $conexion

// Ejercicio 1
// 1. Modifica la consulta que devuelve un resultado para realizarla con objetos.
$consulta = "SELECT nombre, ciudad FROM clientes WHERE id = 2";
$resultado = $conexion->query($consulta);
$fila = $resultado->fetch_object(); // cambiado fetch_assoc(); por fetch_object(); - ver en: "// Consultas con un resultado único y array asociativo" del archivo MySQLi 01.pdf
$nombre = $fila->nombre; // $fila ahora es un objeto, no es un array asociativo
$ciudad = $fila->ciudad;
echo "El usuario con id = 2 se llama $nombre y es de $ciudad" . "<br>";

// 2. Crea una función que muestre el id y el nombre de los clientes de Cartagena
// function clientesCartagena(){
// $consulta="SELECT id, nombre FROM clientes WHERE ciudad='Cartagena';";
// $resultado = $conexion->query($consulta); // $conexion no la coge porque está fuera, pasarla como parámetro para que la coja
function clientesCartagena($conn){
    $consulta = "SELECT id, nombre FROM clientes WHERE ciudad='Cartagena';";
    $resultado = $conn->query($consulta); // $conexion no la coge porque está fuera, pasarla como parámetro para que la coja (ver lo anterior)
    while ($fila = $resultado->fetch_object()) {
        echo "<p>Id: " . $fila->id . ", Nombre: " . $fila->nombre;
    }
}

// PONER ABAJO: clientesCartagena($conexion); // poner $conexion, no $conn que era el atributo que pasamos en function clientesCartagena.


// 3. Crea una función que muestre el nombre de los clientes de Cartagena cuyo nombre empiece por M.

// crear alguien con M, sería así? $sql = "INSERT INTO clientes (nombre, ciudad) VALUES ('Miguel', 'Alcantarilla');";
function clientesCartagenaEmpiezaPorM($conn){
    $consulta = "SELECT id, nombre FROM clientes WHERE ciudad='Cartagena' AND nombre LIKE 'm%';";
    $resultado = $conn->query($consulta);
    while ($fila = $resultado->fetch_object()) {
        echo "<p>Id: " . $fila->id . ", Nombre: " . $fila->nombre;
    }
}

// PONER ABAJO: clientesCartagenaEmpiezaPorM($conexion); 


// 4. Crea una función a la que se le pasen como parámetros un nombre y una ciudad e inserte un nuevo registro con esos datos.

function insercionDatos($conn, $nombre, $ciudad){
    $stmt=$conn->prepare("INSERT INTO clients('nombre', 'ciudad') VALUES (?, ?)");
    // supuestamente no se debe usar comillas simples en: clients(nombre, ciudad)
    $stmt->bind_param("ss", $nombre, $ciudad);
    $stmt->execute();
    
    // el $stmt hace lo mismo que lo puesto aquí, las 2 siguientes líneas de código:
    // $consulta = "INSERT INTO clients('nombre', 'ciudad') VALUES ('$nombre', '$ciudad')";
    // $conn->query($consulta);
}

/* se ponen al final PONER ABAJO: 
insercionDatos($conexion, "Antonio", "Cartagena");
insercionDatos($conexion, "Maria de la O", "Cartagena");
insercionDatos($conexion, "Luis", "Madrid");
*/
//insercionDatos($conexion);

// 5. Crea una función que elimine un registro cuyo id se pase como parámetro.

function idParametro($conn, $id){
    $stmt=$conn->prepare("DELETE FROM clientes WHERE id=?");
    $stmt->bind_param("1", $id);
    $stmt->execute();
    // el $stmt hace lo mismo que lo puesto aquí, las 2 siguientes líneas de código:
    // $eliminacion = "DELETE FROM clientes WHERE id=$id";
    // $conn -> query($eliminacion);
}

// PONER ABAJO: idParametro($conexion, 1);

clientesCartagena($conexion);
clientesCartagenaEmpiezaPorM($conexion); 
insercionDatos($conexion, "Antonio", "Cartagena");
insercionDatos($conexion, "Maria de la O", "Cartagena");
insercionDatos($conexion, "Luis", "Madrid");
idParametro($conexion, 1);

// 6. Prueba las funciones anteriores.
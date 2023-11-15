<!-- Este finalizar_compra.php creado yo -->

<?php
$titulo="Finalizar Compra";
require_once "header.php";
?>

<main>
<h1>Finalizar Compra</h1>
<br>
<!-- Formulario para ingresar datos de envío -->
<form action="procesar_envio.php" method="post">
    <h2>Ingrese sus datos de envío:</h2>
    Nombre: <input type="text" name="nombre"><br>
    Apellidos: <input type="text" name="apellidos"><br>
    Dirección: <input type="text" name="direccion"><br>
    Ciudad: <input type="text" name="ciudad"><br>
    Código Postal: <input type="text" name="codigo_postal"><br>
    Teléfono: <input type="text" name="telefono"><br>
    <input type="submit" value="Continuar y pagar" a href="procesar_envio.php">
    <!-- Dentro del input hemos metido que cuando se envíe, que mande a procesar_envio.php
    dentro de procesar_envio.php debé aparecernos los datos introducidos(para que el cliente vea lo que ha puesto de sus datos de envío)
    y dentro de procesar_envio.php tendremos el FORMULARIO para elegir el método de pago. -->
</form>


</main>

</body>
</html>

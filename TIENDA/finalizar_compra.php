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
    Nombre: <input type="text" name="nombre" placeholder="Su nombre aquí"><br>
    Apellidos: <input type="text" name="apellidos" placeholder="Sus apellidos aquí"><br>
    Dirección: <input type="text" name="direccion" placeholder="Anote aquí su dirección"><br>
    Ciudad: <input type="text" name="ciudad" placeholder="Anote aquí su ciudad"><br>

    Código Postal: <input type="text" name="codigo_postal" 
    placeholder="Anote aquí su código postal" style="width: 220px; height: 50px;"><br>

    Teléfono: <input type="text" name="telefono" 
    placeholder="Anote aquí su número de teléfono" style="width: 260px; height: 30px;"><br>

    <input type="submit" value="Continuar y pagar" a href="procesar_envio.php">
    <!-- Dentro del input hemos metido que cuando se envíe, que mande a procesar_envio.php
    dentro de procesar_envio.php debé aparecernos los datos introducidos(para que el cliente vea lo que ha puesto de sus datos de envío)
    y dentro de procesar_envio.php tendremos el FORMULARIO para elegir el método de pago. -->
</form>


</main>

</body>
</html>

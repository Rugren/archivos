<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index Coche y Producto</title>
</head>
<body>
    <?php
    // PONER EL include_once SIEMPRE del archivo para coger la Clase que queramos añadir
    include_once("Bicicleta.php");
    include_once("Vehiculo.php");
    include_once("Coche.php");

    echo "<p>_________</p>";

    $bh=new Bicicleta("ABC123", "0");

    $bh->recorre(30);
    $totales = $bh->recorre(20); // más los 20 de antes son 50
    echo "La bicicleta ha recorrido ". $bh->getKmRecorridos();
    echo "<p>El total que han recorrido los vehículos es $totales</p>";

    echo "<br>";
    // Ir actualizando y te dirá si has hecho bien el caballito o no.
    echo $bh->hacerCaballito();
    echo "<br>";
    echo "El total que han recorrido los vehículos es ". Vehiculo::getKmTotal();
    echo "<br>";

    $ferrari=new Coche("2991DHF", "Huracan", "Blanco");
    $totales = $ferrari->recorre(200);
    echo "El coche ha recorrido " . $ferrari->getKmRecorridos();
    echo "<p>El total que han recorrido los vehículos es $totales</p>";


    echo "<p>_________</p>";






    ?>
    
</body>
</html>
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

    $bh=new Bicicleta("ABC123", "0");
    
    echo $bh->hacerCaballito();

    echo "<hr>";

    $bh->recorre(30);

    echo "La bicicleta ah recorrido " . $bh->getKmRecorridos();

    echo "<hr>";
    
    echo "El total que han recorrido los vehiculos es " . Vehiculo::getKmTotal();
    
    echo "<hr>";

    $ferrari =new Coche("asdasd45", "Huracan");
    $totales = $ferrari->recorre(200);







    ?>
    
</body>
</html>
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
    include_once("Coche.php");
    include_once("Producto.php");
    // include_once("Bicicleta.php"); puesto en el index2.php
    // include_once("Vehiculo.php"); // puesto en el index2.php



    $ferrari=new Coche("1234abc", "Testarosa", "Blanco");
    $fiat=new Coche("4321cba", "Fiat 500x", "Rojo");

    echo $ferrari->arrancar();
    echo $fiat->arrancar();

    $ferrari->recorre(100);
    $fiat->recorre(25);
    $ferrari->recorre(200);
    echo "<p>Entre los dos han recorrido " . Coche::getKilometrajeTotal() . " Kms.</p>";

    echo "<p>_________</p>";

    $television= new Producto("Samsung x27", "Gran televisor de pequeño tamaño", 150, "img/Samsung_x27.jpg");
    echo $television->mostrar();

    echo "<p>_________</p>";





    ?>
    
</body>
</html>
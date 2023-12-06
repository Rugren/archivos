
<html>
    <head>
        <meta charset="UTF-8">
</head> 
    <body>
       <?php
    /* 
       $palabras=("hola", "adios", "uno", "dos");
        $words=("hello", "bye", "one", "two");
        echo "<table>";
        for($n=0; $n<sizeof($palabras); $n++)(
            echo "<tr><td>", $palabras[$n], ""
        )
        sin acabar
        ?>
    */

// Creo que es el de la página 20, el ejercicio 3 de aprendephpconejercicios.pdf
    echo "<table>";
    $euros=3;
    $pesetas= $euros*166.386;
    echo "$euros euros son $pesetas pesetas";
    echo "</table>";

/* Esto cogido de: ejercicio 03 Conversor de pesetas a euros
C:\xampp\htdocs\archivos\PHP0\aprende-php-con-ejercicios-master\soluciones\02_RecogidaDeDatosPorTeclado\03result.php
Para ejecutarlo en xamp:
http://localhost/archivos/php0/aprende-php-con-ejercicios-master/soluciones/02_RecogidaDeDatosPorTeclado/03.php
*/
/* que no va:
    echo $_POST['pesetas'], " pesetas son ";
    echo round($_POST['pesetas'] / 166.386, $precision = 2), " euros.";
*/
?>

    </body>
</html>
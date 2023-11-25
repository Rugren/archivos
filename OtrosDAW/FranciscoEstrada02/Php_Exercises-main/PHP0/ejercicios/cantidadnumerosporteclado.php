<form action="cantidadnumerosporteclado.php" method="post">
    <input type="number" name="numero1">
    <input type="submit" value="enviar" name="enviar"">
</form>

<?php

if(isset($_POST["enviar"])){

    $numero1 = $_POST["numero1"];
    
    $p=1;

    while($numero1 < pow(10,$p)){
        $p++;
    }
    $p++;

    echo "El numero $numero1 tiene $p cifras";

}




?>
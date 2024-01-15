<form action="unico.php" method="post">
    <input type="number" name="numero1">
    <input type="number" name="numero2">
    

    <select name="seleccion">
        <option value="suma">Suma</option>
        <option value="resta">Resta</option>
        <option value="multiplica">Multiplicacion</option>
        <option value="divide">Division</option>
    </select>

    <input type="submit" value="enviar" name="enviar"">
</form>

<?php
    if(isset($_POST["enviar"])){
        $numero1 = $_POST["numero1"];
        $numero2 = $_POST["numero2"];
        $operacion = $_POST["seleccion"];
    
    if($operacion == "suma"){
        $resultado = $numero1 + $numero2;
        echo "El resultado de la suma de $numero1 y $numero2 es $resultado";
    } else if($operacion == "resta"){
        $resultado = $numero1 - $numero2;
        echo "El resultado de la resta de $numero1 y $numero2 es $resultado";
    } else if ($operacion == "multiplica"){
        $resultado = $numero1 * $numero2;
        echo "El resultado de la multiplicacion de $numero1 y $numero2 es $resultado";
    }else if($operacion == "divide"){
        $resultado = $numero1 / $numero2;
        echo "El resultado de la division de $numero1 y $numero2 es $resultado";
    }
}
?>
<form action="unico.php" method="POST">
    <input type="number" name="numero">
    <input type="number" name="numero2">
    <select name ="operacion">
        <option value="suma">Suma</option>
        <option value="resta">Resta</option>
        <option value="multiplica">Multiplica</option>
        <option value="divide">Divide</option>
    </select>
    <input type="submit" value="Enviar" name="boton">
</form>

<?php
    if(isset($_POST["boton"])){
        $numero1 = $_POST["numero1"];
        $numero2 = $_POST["numero2"];
        $operacion = $_POST["operacion"];
        
        /*if($numero>5){
            echo "Tu número es mayor que 5";
        }else {
            echo "No es mayor que 5";
        }
        */
        
        if($operacion=="suma"){
            $resultado = $numero1 + $numero2;
        }else if($operacion=="resta"){
            $resultado = $numero1 - $numero2;
        }else if($operacion=="muultiplica"){
            $resultado = $numero1 * $numero2;
        }else if($operacion=="divide"){
            $resultado = $numero1 / $numero2;
        }

        echo "El resultado es $resultado";

    }
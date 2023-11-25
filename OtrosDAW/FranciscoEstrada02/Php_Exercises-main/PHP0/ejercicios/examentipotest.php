<h1>¿Que va antes de cada variable en PHP?</h1>

<form action="examentipotest.php" method="post">
    

    <select name="seleccion">
        <option value="1">1. $</option>
        <option value="2">2. %</option>
        <option value="3">3. &</option>
        <option value="4">4. /</option>
    </select>

    <input type="submit" value="enviar" name="enviar"">
</form>

<?php
    if(isset($_POST["enviar"])){
        $respuesta = $_POST["seleccion"];

        if($respuesta == "1"){
            echo("!Correcto¡ Tienes 10 puntos");
        }else{
            echo("Incorrecto, intentalo de nuevo");
        }


    }

?>
<form action="conversoreuroapeseta.php" method="post">
    <input type="number" name="numero1">
    <input type="submit" value="enviar" name="enviar"">
</form>

<?php 
    

    if(isset($_POST["enviar"])){
        $numero1 = $_POST["numero1"];
        $resultado = $numero1 * 166.386;

        echo ("La conversion de $numero1 euros a pesetas es $resultado");
    }
?>
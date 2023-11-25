<form action="paronopar.php" method="post">
    <input type="number" name="numero1">
    <input type="submit" value="enviar" name="enviar"">
</form>

<?php 
    

    if(isset($_POST["enviar"])){
        $numero1 = $_POST["numero1"];
        
        if($numero1 % 2 == 0 && $numero1 % 5 == 0){
            echo "El numero es par";
        }else{
            echo "El numero es impar";
        }

        
    }
?>
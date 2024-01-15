<form action="ultimodigito.php" method="post">
    <input type="number" name="numero1">
    <input type="submit" value="enviar" name="enviar"">
</form>

<?php 
    
    if(isset($_POST["enviar"])){

        $numero1 = $_POST["numero1"];
        


        echo substr($numero1,-1,1);
        
    }
?>
<form action="cuadradoycubo.php" method="post">
    <input type="number" name="numero1">
    <input type="submit" value="enviar" name="enviar"">
</form>


<?php 
    
    if(isset($_POST["enviar"])){

        $numero1 = $_POST["numero1"];
        

        for($a = $numero1; $a < $numero1 + 5 ; $a++){
            echo pow( $a, 2);
            echo "<br>";

            echo pow( $a, 3);
            echo "<br>";
        }
        
        
        
    }
?>
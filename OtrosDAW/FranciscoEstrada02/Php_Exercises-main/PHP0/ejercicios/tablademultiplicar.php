<form action="tablademultiplicar.php" method="post">
    <input type="number" name="numero1">
    <input type="submit" value="enviar" name="enviar"">
</form>


<?php 
    
    if(isset($_POST["enviar"])){

        $numero1 = $_POST["numero1"];
        
        for($n = 0; $n < 11; $n++){
            echo "$numero1 x $n =" . $n*$numero1;
            echo "<br>";
        }

        echo "<table border='2'>";

        for ($n=1; $n<11; $n++) {
            echo "<tr>";
            echo "<td> 7 </td>";
            echo "<td> x </td>";
            echo "<td> $n </td>";
            echo "<td>" . $n*7 . "</td>";
            echo "</tr>";

        }
        
        echo "</table>";
    }
?>
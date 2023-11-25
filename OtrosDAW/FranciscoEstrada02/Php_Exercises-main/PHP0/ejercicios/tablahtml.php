<form action="tablahtml.php" method="post">
    <input type="number" name="numero1">
    <input type="submit" value="enviar" name="enviar"">
</form>

<?php 
    
    if(isset($_POST["enviar"])){

        $numero1 = $_POST["numero1"];
        

        echo "<table border='2'>";

        for ($n=1; $n<11; $n++) {
            echo "<tr>";
            echo "<td> $numero1 </td>";
            echo "<td> x </td>";
            echo "<td> $n </td>";
            echo "<td>" . $numero1 * $n . "</td>";
            echo "</tr>";
        }
        
        echo "</table>";
    }
?>
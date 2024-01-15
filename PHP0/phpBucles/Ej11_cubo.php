<form action="" method="POST">
    <input type="number" name="numero">
    <input type="submit" value="Enviar">
</form>

<?php
    if(isset($_POST["numero"])){
        $numero=$_POST["numero"];
        echo "<table>";
        for($a=$numero; $a<$numero+5; $a++){
            echo "<tr>";
            echo "<td>" . pow($a, 2) . "</td>";
            echo "<td>" . pow($a, 3) . "</td>";
            echo "<tr>";
        }
        echo "</table>";
    }
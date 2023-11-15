<form action="" method="POST">
    <input type="number" value="numero">
    <input type="submit" value="Enviar">
</form>

<?php
    if(isset($_POST["numero"])){
        $numero=$_POST["numero"];
        echo "<table>";
        for($n=1; $n<11; $n++){
            echo "<tr><td> $numero </td> </td> <td> $n </td>";
            echo "<td> . $numero * $n </td></tr>";
        }
        echo "</table>";
    }
<?php

if(empty($_POST["numero"]) || $_POST["numero"] > 0){
    $suma = empty($_POST["numero"]) ? 0 : $_POST['suma'] + $_POST["numero"];

    $cantidad = empty($_POST["numero"]) ? 0: $_POST['cantidad'] + 1;

    echo "<form action='' method='POST'>";
    echo "<input type='number' name='numero'>";
    echo "<input type='hidden' name='suma' value='$suma'>";
    echo "<input type='hidden' name='cantidad' value='$cantidad'>";
    echo "<input type='submit' value='Enviar'> </form>";
}else{
    echo "La media es " . $_POST["suma"] / $_POST["cantidad"];
}






?>
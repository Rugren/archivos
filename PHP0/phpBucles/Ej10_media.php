<?php
    if(empty($_POST["numero"]) || $_POST["numero"]>0){
        $suma = empty($_POST["numero"]) ? 0 : $_POST['suma'] + $_POST["numero"];
        $cantidad= empty($_POST["numero"]) ? 0 : $_POST['cantidad']  + 1;
 
        echo "<form action='' method='POST'>";
        echo "<input type='number' name='numero'>";
        echo "<input type='hidden' name='suma' value='$suma'>";
        echo "<input type='hidden' name='cantidad' value='$cantidad'>";
        echo "<input type='submit' value='Enviar'></form>";
        
        echo "Escribe todos los número que quieras para calcular la media. ";
        echo "<br>"; // en .php poner echo delante de la etiqueta br, en html solo <br> sin entrecomillar.
        echo "Esccribe un número negativo para finalizar.";
        
    }else{
        echo "La media es " . $_POST["suma"] / $_POST["cantidad"];
    }





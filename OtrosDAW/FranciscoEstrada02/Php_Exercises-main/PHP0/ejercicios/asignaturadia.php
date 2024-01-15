<form action="asignaturadia.php" method="post">
    <select name="seleccion">
        <option value="lunes">Lunes</option>
        <option value="martes">Martes</option>
        <option value="miercoles">Miercoles</option>
        <option value="jueves">Jueves</option>
        <option value="viernes">Viernes</option>
    </select>

    <input type="submit" value="enviar" name="enviar">

</form>

<?php
    if(isset($_POST["enviar"])){
        $dia = $_POST["seleccion"];
    
        if($dia == "lunes"){
            echo("Tu primera asignatura del $dia es Entorno Sevidor");
        } else if($dia == "martes"){
            echo("Tu primera asignatura del $dia es Lenguaje de marcas");
        } else if($dia == "miercoles"){
            echo("Tu primera asignatura del $dia es Entorno Servidor");
        } else if($dia == "jueves"){
            echo("Tu primera asignatura del $dia es Lenguaje de marcas");
        } else if($dia == "viernes"){
            echo("Tu primera asignatura del $dia es Entorno Cliente");
        }
    
    
    }  


?>
<form action="" method="POST">
    <select name ="dia">
        <option> lunes </option>
        <option> martes </option>
        <option> miércoles </option>
        <option> jueves </option>
        <option> viernes </option>
    </select>
    <input type="submit" value="Enviar">
</form>
<?php
    if(isset($_POST["dia"])){
        $dia = $_POST["dia"];
        switch ($dia){
            case "lunes";
                echo "Entorno servidor";
                break;
            case "martes";
                echo "Despliegue";
                break;
            case "miercoles";
                echo "Despliegue";
                break;
            case "jueves";
                echo "Despliegue";
                break;
            case "viernes";
                echo "Lenguaje de marcas";
                break;
        }
    }
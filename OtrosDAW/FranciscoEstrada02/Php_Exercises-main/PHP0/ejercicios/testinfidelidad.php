<h1>Test de infidelidad</h1>

<form>
    <h3>1. Tu pareja parece estar más inquieta de lo normal sin ningún motivo aparente.</h3>
    <select name="1">
        <option value="si">Si</option>
        <option value="no">No</option>
    </select>

    <h3>2. Ha aumentado sus gastos de vestuario</h3>
    <select name="2">
        <option value="si">Si</option>
        <option value="no">No</option>
    </select>

    <h3>3. Ha perdido el interés que mostraba anteriormente por ti.</h3>
    <select name="3">
        <option value="si">Si</option>
        <option value="no">No</option>
    </select>

    <h3>4. Ahora se afeita y se asea con más frecuencia (si es hombre) o ahora se arregla el pelo y se asea con más frecuencia (si es mujer).</h3>
    <select name="4">
        <option value="si">Si</option>
        <option value="no">No</option>
    </select>

    <h3>5. No te deja que mires la agenda de su teléfono móvil</h3>
    <select name="5">
        <option value="si">Si</option>
        <option value="no">No</option>
    </select>

    <h3>6. A veces tiene llamadas que dice no querer contestar cuando estás tú delante</h3>
    <select name="6">
        <option value="si">Si</option>
        <option value="no">No</option>
    </select>

    <h3>7. Últimamente se preocupa más en cuidar la línea y/o estar bronceado/a</h3>
    <select name="7">
        <option value="si">Si</option>
        <option value="no">No</option>
    </select>

    <h3>8. Muchos días viene tarde después de trabajar porque dice tener mucho más trabajo</h3>
    <select name="8">
        <option value="si">Si</option>
        <option value="no">No</option>
    </select>

    <h3>9. Has notado que últimamente se perfuma más</h3>
    <select name="9">
        <option value="si">Si</option>
        <option value="no">No</option>
    </select>

    <h3>10. Se confunde y te dice que ha estado en sitios donde no ha ido contigo</h3>
    <select name="10">
        <option value="si">Si</option>
        <option value="no">No</option>
    </select>

    <input type="submit" value="enviar" name="enviar">
</form>

<?php
    if(isset($_POST["enviar"])){

        $seleccion =$_POST([1]);

        for($n = 1; $n < 11; $n++){
            
        }


    }


?>
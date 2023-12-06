<?php

/* Está dentro de C:\xampp\htdocs\archivos\PHP0\aprende-php-con-ejercicios-master\soluciones\03_SentenciaCondicional es el ejercicio 15 

Para ejecutar con el xampp sería:
http://localhost/archivos/php0/aprende-php-con-ejercicios-master/soluciones/03_SentenciaCondicional/15.php
*/



    $preguntas[0]="1. Tu pareja parece estar más inquieta de lo normal sin ningún motivo aparente.";
    $preguntas[1]="2. Ha aumentado sus gastos de vestuario";
    $preguntas[2]="3. Ha perdido el interés que mostraba anteriormente por ti";
    $preguntas[3]="4. Ahora se afeita y se asea con más frecuencia (si es hombre) o ahora se arregla el pelo y se asea con más frecuencia (si es mujer)";
    $preguntas[4]="5. No te deja que mires la agenda de su teléfono móvil";
    $preguntas[5]="6. A veces tiene llamadas que dice no querer contestar cuando estás tú delante";
    $preguntas[6]="7. Últimamente se preocupa más en cuidar la línea y/o estar bronceado/a";
    $preguntas[7]="8. Muchos días viene tarde después de trabajar porque dice tener mucho más trabajo";
    $preguntas[8]="9. Has notado que últimamente se perfuma más";
    $preguntas[9]="10. Se confunde y te dice que ha estado en sitios donde no ha ido contigo";
 
    echo "<form action='infidelidad.php' method='POST'>";
    for($n=0; $n<sizeof($preguntas); $n++){
        echo "<h2>" . $preguntas[$n] . "</h2>";
        echo "<select name='select$n'>";
        echo "<option>1</option>";
        echo "<option>2</option>";
        echo "<option>3</option>";
        echo "</select>";
    }
    echo "<input type='submit' value='Enviar' name='enviar'></form>";
 
    if(isset($_POST["enviar"])){
        echo "hola";
        //$puntos=$_POST["select0"] + $_POST["select1"] + $_POST["select2"];
        $puntos=0;
        for($n=0; $n<sizeof($preguntas); $n++){
            $puntos += $_POST["select" . $n];
        }
 
        if($puntos<=10){
            echo "Que suerte tienes, tu pareja es fiel";            
        }else if($puntos<20){
            echo "Cuidado";
        }else{
            echo "Peligro";
        }
 
    }

?>
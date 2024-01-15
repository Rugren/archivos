<?php
// a. Para definir el array con 30 palabras diferentes
$palabras = ["Rubén", "Miguel", "manzana", "patata", "programación", "elefante", "rinoceronte", "guitarra", "montaña", "hola", "adiós", "jardín", "espejo", "clase", "cuchillo", "cuchara", "tenedor", "radiador", "fotografía", "invierno", "verano", "universidad", "nube", "almohada", "lluvia", "sol", "viento", "camuflaje", "mariposa", "noche"];

// b. Aquí mostramos las 3 primeras letras en MAYÚSCULAS de las 7 palabras aleatorias y sin repetir (el punto c aquí metido)
$palabrasAleatorias = array_rand(array_flip($palabras), 7);
// si lo pongo debajo del foreach no funciona

foreach ($palabrasAleatorias as $palabra) {
    $tresPrimerasLetras = strtoupper(substr($palabra, 0, 3));
    echo $tresPrimerasLetras . "<br>" . PHP_EOL;
}
?>

<!-- Sin el PHP_EOL funciona, no es necesario -->
<!-- echo $tresPrimerasLetras . "<br>" . PHP_EOL; -->
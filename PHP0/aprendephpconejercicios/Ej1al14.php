<?php

// Página 57: 6.4 Ejercicios Ejercicios 1-14
// Algunos ejercicios resueltos: https://github.com/LuisJoseSanchez/aprende-php-con-ejercicios/tree/master/ejemplos

//Ejercicio 1. esCapicua: Devuelve verdadero si el número que se pasa como parámetro es capicúa y falso en caso contrario.
function esCapicua($n) {
    $capicua = true;
    
    for ($i = 0; $i <floor(strlen($n)/2); $i++) {
      if (substr($n,$i,1) != substr($n, -($i+1), 1)) { // si da 1 es que si, si da 0 es que no lo es.
        $capicua = false;
      }
    }
    return $capicua;
  }
/*  //Ejercicio 1.1. esCapicua: Devuelve verdadero si el número que se pasa como parámetro es capicúa y falso en caso contrario.
function esCapicua($n) {
    // $capicua = true; // así con true da 1 y si es false da ""(nada, lo deja vacío).
    $capicua = " es capicuaaa!"; 

    for ($i = 0; $i <floor(strlen($n)/2); $i++) {
      if (substr($n,$i,1) != substr($n, -($i+1), 1)) {
        // $capicua = false; // así con true da 1 y si es false da ""(nada, lo deja vacío).
        $capicua = " nooo es capicuaaa!"; 
      }
    }
    return $capicua;
  }
*/


  /* otra manera de capicua-- da mal
  function voltea($n){
    $volteado="";
    for($i=-strlen($n); $i<0; $i++){
        $volteado += substr($n,$i,1);
    }
    return $voltea
  }
*/

//Ejercicio 2. esPrimo: Devuelve verdadero si el número que se pasa como parámetro es primo y falso encaso contrario.
function esPrimo($n) {
    // $esPrimo = true;
    $esPrimo = " es primo";

    for ($i = 2; $i < $n; $i++) {
      if ($n % $i == 0) {
        // $esPrimo = false;
        $esPrimo = " NO es primo";
      }
    }

    // El 0 y el 1 no se consideran primos
    if (($n == 0) || ($n == 1)) {
      $esPrimo = false;
    }

    return $esPrimo;
  }

//Ejercicio 3. siguientePrimo: Devuelve el menor primo que es mayor al número que se pasa como parámetro.
//Ejercicio 4. potencia: Dada una base y un exponente devuelve la potencia.
//Ejercicio 5. digitos: Cuenta el número de dígitos de un número entero.

//Ejercicio 6. voltea: Le da la vuelta a un número.


//Ejercicio 7. digitoN: Devuelve el dígito que está en la posición n de un número entero. Se empieza contando por el 0 y de izquierda a derecha.
//Ejercicio 8. posicionDeDigito: Da la posición de la primera ocurrencia de un dígito dentro de un número entero. Si no se encuentra, devuelve -1.
//Ejercicio 9. quitaPorDetras: Le quita a un número n dígitos por detrás (por la derecha).
//Ejercicio 10. quitaPorDelante: Le quita a un número n dígitos por delante (por la izquierda).
//Ejercicio 11. pegaPorDetras: Añade un dígito a un número por detrás.
//Ejercicio 12. pegaPorDelante: Añade un dígito a un número por delante.
//Ejercicio 13. trozoDeNumero: Toma como parámetros las posiciones inicial y final dentro de un número y devuelve el trozo correspondiente.
//Ejercicio 14. juntaNumeros: Pega dos números para formar uno




?>
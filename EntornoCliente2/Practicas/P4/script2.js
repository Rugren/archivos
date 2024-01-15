
var nombre = "Ruben";
var apellido = "García";
var edad = 31;
var anoNacimiento = 1992;

// Muestra en un alert una frase que incluye comillas simples
alert('Hola, me llamo ' + nombre + ' ' + apellido + ' y esto es un ejemplo con comillas simples.');
// entre medias hemos puesto ' ' para que haga un espacio entre nombre y apellidos

// Muestra en un alert tu nombre y apellidos separados por un salto de línea
alert(nombre + '\n' + apellido);

// Muestra en un alert la suma de las variables edad y año de nacimiento
alert('La suma de "edad" y "año de nacimiento" es: ' + (edad + anoNacimiento));
// debe dar el año actual (según la edad que hayamos puesto si está dentro del año o no)

// Muestra en un alert la suma de todas las variables
alert('La suma de todas las variables es: ' + (nombre + ' ' + apellido + ' ' + edad + ' ' + anoNacimiento));

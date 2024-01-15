
var fecha1 = new Date();    // Creamos una fecha actual, la 1ª (para luego crear una 2ª fecha y calcular el intervalo de tiempo entre ambos)
var tiempo1 = fecha1.getTime(); // para que nos de la fecha1 en formato fecha

var nombre = prompt("Introduce tu Nombre:");
var apellido1 = prompt("Introduce tu primer Apellido:");
var apellido2 = prompt("Introduce tu segundo Apellido:");

var fecha2 = new Date(); // Volvemos a crear otra fecha actual, la 2ª fecha
var tiempo2 = fecha2.getTime(); // Y obtenemos la segunda fecha

// Aquí es cuando calculamos el tiempo total entre la fecha 1 y la 2
var totalTiempo = (tiempo2 - tiempo1) / 1000;
totalTiempo = totalTiempo.toFixed(1); // Le decimos que fije los decimales en 1

document.write("En introducir " + nombre + " " + apellido1 + " " + apellido2 + " ha tardado " + totalTiempo + " segundos.");

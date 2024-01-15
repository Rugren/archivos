// Con el prompt vamos a pedir al usuario que introduzca una edad
// var respuesta = prompt("Mensaje");
var respuestaUsuario = prompt("Introduce tu edad:");

// Convertir la entrada del usuario a un número
var edad = parseInt(respuestaUsuario);

/* Aquí hecho con console.log (que solo lo muestra en la consola)
HECHO MÁS ABAJO PARA QUE SE VEA EN EL ALERT visualmente cuando abramos el HTML.

if (edad < 0) { // Comprobamos si la edad es menor que 0 y en caso de que lo sea, que diga lo siguiente.
    console.log("La edad no puede ser menor que 0. Por favor, introduce un número válido.");
} else {
    // Utilizamos if-else para determinar la categoría de edad
    if (edad <= 12) {
        console.log("Eres un niño.");
    } else if (edad <= 26) {
        console.log("Eres joven.");
    } else if (edad <= 60) {
        console.log("Eres adulto.");
    } else {
        console.log("Eres jubilado.");
    }
}
*/


// Copiar y pegarlo dentro del index4.html

if (edad < 0) { // Comprobamos si la edad es menor que 0 y en caso de que lo sea, que diga lo siguiente.
    alert("La edad no puede ser menor que 0. Por favor, introduce un número válido.");
} else {
    // Utilizamos if-else para determinar la categoría de edad
    if (edad <= 12) {
        alert("Eres un niño.");
    } else if (edad <= 26) {
        alert("Eres joven.");
    } else if (edad <= 60) {
        alert("Eres adulto.");
    } else {
        alert("Eres jubilado.");
    }
}
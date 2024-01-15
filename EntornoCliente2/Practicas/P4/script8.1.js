// EL EJERCICIO 8 correcto es este: script8.js 
// pero esta es otra manera de hacerlo:

// Respuesta correcta
var respuestaCorrecta = "Adolfo Suárez";

// Variable para almacenar la respuesta ingresada por el usuario
var respuestaUsuario;

// Bucle while para repetir hasta que la respuesta sea correcta
while (true) {
    // Pregunta al usuario
    respuestaUsuario = prompt("¿Cuál fue el primer presidente de la democracia española?");

    // Verifica si la respuesta es correcta
    if (respuestaUsuario === respuestaCorrecta) {
        // Mensaje de éxito al adivinar la respuesta
        alert("¡Correcto! Adolfo Suárez fue el primer presidente de la democracia española.");
        break; // Sale del bucle while
    } else {
        // Divide la respuesta del usuario en nombre y apellido
        var partesRespuesta = respuestaUsuario.split(" ");

        // Verifica los casos de error
        if (partesRespuesta.length === 2) {
            // Verifica si el nombre y apellido son correctos
            if (partesRespuesta[0] !== "Adolfo" || partesRespuesta[1] !== "Suárez") {
                alert("ERROR. Inténtelo de nuevo (Escriba nombre y apellido).");
            } else {
                // Mensaje de error si la respuesta contiene ambos nombre y apellido
                alert("Te falta el apellido. ¿Cuál fue el primer presidente de la democracia española?");
            }
        } else if (partesRespuesta.length === 1 && partesRespuesta[0] !== "Suárez") {
            // Verifica si el usuario ingresó solamente el nombre
            alert("Te falta el apellido. ¿Cuál fue el primer presidente de la democracia española?");
        } else if (partesRespuesta.length === 1 && partesRespuesta[0] !== "Adolfo") {
            // Verifica si el usuario ingresó solamente el apellido
            alert("Te falta el nombre. ¿Cuál fue el primer presidente de la democracia española?");
        } else {
            // Mensaje de error si la respuesta no tiene el formato esperado
            alert("ERROR. Inténtelo de nuevo.");
        }
    }
}

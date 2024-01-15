// Variable para almacenar la respuesta correcta
var respuestaCorrecta = "Adolfo Suárez";

// Variable para almacenar la respuesta ingresada por el usuario
var respuestaUsuario = "";

// Bucle while para repetir hasta que la respuesta sea correcta
while (respuestaUsuario !== respuestaCorrecta) {
    // Pregunta al usuario
    respuestaUsuario = prompt("¿Cuál fue el primer presidente de la democracia española?");

    // Verifica si la respuesta está vacía o es nula
    if (!respuestaUsuario) {
        alert("ERROR. Inténtelo de nuevo. ¿Cuál fue el primer presidente de la democracia española?");
    } else {
        // Divide la respuesta del usuario en nombre y apellido
        var partesRespuesta = respuestaUsuario.split(" ");

        // Verifica si el usuario ingresó ambos; nombre y apellido
        if (partesRespuesta.length === 2) {
            // Verifica si el nombre es correcto
            if (partesRespuesta[0] !== "Adolfo" || partesRespuesta[1] !== "Suárez") {
                alert("ERROR. Inténtelo de nuevo. ¿Cuál fue el primer presidente de la democracia española?");
            }
        } else if (partesRespuesta.length === 1) {
            // Verifica si el usuario ingresó solamente el nombre
            alert("Te falta el apellido. ¿Cuál fue el primer presidente de la democracia española?");
        } else {
            // Verifica si el usuario ingresó solamente el apellido
            alert("Te falta el nombre. ¿Cuál fue el primer presidente de la democracia española?");
        }
    }
}

// Mensaje si pone la respuesta correcta (aquí lo muestra cuando sale del bucle)
alert("¡Correcto! Adolfo Suárez fue el primer presidente de la democracia española.");


// LO QUE MODIFIQUE AQUÍ, PONER EN EL index9.html

// Variable para almacenar la respuesta correcta
var respuestaCorrecta = "Adolfo Suárez";

// Variable para almacenar la respuesta ingresada por el usuario
var respuestaUsuario = "";

// Bucle do-while para repetir hasta que la respuesta sea correcta
do {
    // Pregunta al usuario
    respuestaUsuario = prompt("¿Cuál fue el primer presidente de la democracia española?");

    // Verifica si la respuesta está vacía o es nula
    if (!respuestaUsuario) {
        alert("ERROR. Inténtelo de nuevo. ¿Cuál fue el primer presidente de la democracia española? (Debe poner nombre y apellido)");
        continue;
    }

    // Divide la respuesta del usuario en nombre y apellido
    var partesRespuesta = respuestaUsuario.split(" ");

    // Switch para evaluar la longitud de las partes de la respuesta
    switch (partesRespuesta.length) {
        case 2:
            // Verifica si el nombre y apellido son correctos
            if (partesRespuesta[0] === "Adolfo" && partesRespuesta[1] === "Suárez") {
                alert("¡Correcto! Adolfo Suárez fue el primer presidente de la democracia española.");
            } else {
                alert("ERROR. Inténtelo de nuevo. ¿Cuál fue el primer presidente de la democracia española? (Debe poner nombre y apellido)");
            }
            break;
        case 1:
            // Verifica si el usuario ingresó solamente el nombre
            alert("Te falta el apellido. ¿Cuál fue el primer presidente de la democracia española?");
            break;
        default:
            // Verifica si el usuario ingresó solamente el apellido
            alert("Te falta el nombre. ¿Cuál fue el primer presidente de la democracia española?");
            break;
    }
} while (respuestaUsuario !== respuestaCorrecta);

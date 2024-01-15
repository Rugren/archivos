// Definimos el apellido del primer presidente de la democracia Española: Adolfo Suárez.
var apellidoPresidente = "Suárez";

// Pedimos al usuario que escriba el apellido del primer presidente de la democracia Española
var respuestaUsuario = prompt("Escribe el apellido del primer presidente de la democracia española: (Debes poner la primera letra en mayúscula y utilizar el acento)");

// Utilizamos un bucle while para seguir pidiendo la respuesta mientras sea incorrecta
while (respuestaUsuario !== apellidoPresidente) {
    // Mensaje que la respuesta es incorrecta:
    alert("Respuesta incorrecta. Inténtalo de nuevo.");

    // Pedimos al usuario que vuelva a escribir el apellido del presidente
    respuestaUsuario = prompt("Escriba de nuevo, el apellido del primer presidente de la democracia:");
}

// Si el bucle termina, significa que la respuesta es correcta
// Mensaje que se ha ingresado correctamente la respuestaUsuario
alert("¡Correcto! Puedes acceder a la página.");

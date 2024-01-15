/* Función para agregar ceros a la izquierda si el número es menor que 10 
(porque sino pondría 9:0, con esta función la llamamos abajo y pone 9:00) */
function agregarCeros(numero) {
    return numero < 10 ? '0' + numero : numero;
}

var hora = 9;
var minutos = 0;
var esHoraEnPunto = true; // Variable booleana para comprobar si es la hora en punto o media hora.

// Bucle for para generar el listado de horas
for (; hora <= 21 || (hora === 21 && minutos === 0);) {
    // Formatear la hora con ceros a la izquierda
    var horaFormateada = agregarCeros(hora);
    var minutosFormateados = agregarCeros(minutos);

    // Construir el mensaje a mostrar
    var mensaje = "Hora: " + horaFormateada + ":" + minutosFormateados;

    // Mostrar el mensaje en el HTML
    document.write(mensaje + "<br>");

    // Cambiar la variable booleana según sea hora en punto o media hora
    esHoraEnPunto = !esHoraEnPunto;

    // Actualizar las variables de hora y minutos
    if (esHoraEnPunto) {
        hora++;
        minutos = 0;
    } else {
        minutos = 30;
    }
}
// Función para crear una nueva ventana hija
function crearVentanaHija() {
    var nuevaVentana = window.open('hija.html', '', 'width=400,height=200');

    // Agregar una opción al select en la ventana padre
    var select = document.getElementById('select');
    var opcion = document.createElement('option');
    opcion.text = 'Ventana Hija ' + nuevaVentana.name;
    opcion.value = nuevaVentana.name;
    select.add(opcion);
}

// Función para enviar mensaje a la ventana hija seleccionada
function enviarMensaje() {
    var texto = document.getElementById('textoPadre').value;
    var select = document.getElementById('select');
    var ventanaSeleccionada = select.options[select.selectedIndex].value;
    var ventanaHija = window.open('', ventanaSeleccionada);
    ventanaHija.postMessage(texto, '*');
}

// Evento para crear una nueva ventana hija al hacer clic en el botón correspondiente
document.getElementById('crearHijo').addEventListener('click', crearVentanaHija);

// Evento para enviar mensaje a la ventana hija seleccionada al hacer clic en el botón correspondiente
document.getElementById('enviarMensaje').addEventListener('click', enviarMensaje);

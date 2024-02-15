// Escuchar mensajes enviados desde la ventana padre
window.addEventListener('message', function (event) {
    var texto = event.data;
    document.getElementById('textoHijo').innerText = texto;
});

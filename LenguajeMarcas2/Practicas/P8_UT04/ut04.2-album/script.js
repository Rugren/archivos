document.getElementById('btnAgregar').addEventListener('click', function() {
    // Obtener la URL de la imagen del campo de entrada
    var urlImagen = document.getElementById('urlImagen').value;

    // Verificar si la URL no está vacía
    if (urlImagen.trim() !== '') {
        // Crear un nuevo elemento img y establecer su atributo src
        var nuevaImagen = document.createElement('img');
        nuevaImagen.src = urlImagen;

        // Aquí hay que establecer un ancho fijo para la imagen
        nuevaImagen.style.width = '300px';

        // para crear un contenedor para la imagen y el botón Eliminar
        var imagenContainer = document.createElement('div');
        imagenContainer.classList.add('imagen-container');

        // Añadir la imagen al contenedor
        imagenContainer.appendChild(nuevaImagen);

        // Añadir evento click para alternar la clase seleccionada
        nuevaImagen.addEventListener('click', function(event) {
            event.stopPropagation(); // Evitar que el evento se propague al contenedor
            nuevaImagen.classList.toggle('seleccionada');
            // tenía puesta imagenContainer: imagenContainer.classList.toggle('seleccionada'); pero es con nuevaImagen.
        });

        // Crear el botón Eliminar
        var btnEliminar = document.createElement('button');
        btnEliminar.textContent = 'Eliminar';
        btnEliminar.addEventListener('click', function() {
            // Para eliminar la imagen y el botón
            imagenContainer.remove();
        });

        // Añade el botón al contenedor
        imagenContainer.appendChild(btnEliminar);

        // Añade el contenedor al álbum
        document.getElementById('album').appendChild(imagenContainer);

        // Limpiar el campo de entrada
        document.getElementById('urlImagen').value = '';
    }
});

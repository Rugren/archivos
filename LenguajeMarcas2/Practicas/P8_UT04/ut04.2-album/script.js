
/* document.getElementById('btnAgregar').addEventListener('click', function() {
    let imagen = document.getElementById('urlImagen').value;
    if (imagen) {
        // Obtener elementos lista e item de la lista
        let lista = document.getElementById('listaProfesiones');
        let li = document.createElement('li');
        // Añadir el texto que el usuario ha escrito en imagen, al contenido del item
        li.textContent = imagen;
        // Crear un botón con texto Eliminar, que al pulsarlo elimine el item de la lista
        let btnEliminar = document.createElement('button');
        btnEliminar.textContent = 'Eliminar';
        btnEliminar.className='eliminar';
        btnEliminar.onclick = function() {
            lista.removeChild(li);
        };
        // Añadir el botón creado para eliminar el item como nodo hijo del item
        li.appendChild(btnEliminar);
        // Al hacer click sobre el nombre del item de la lista, se cambiará su clase a completada.
        li.addEventListener('click', function() {
            li.classList.toggle('completada');
        });

        // Añadir el item a la lista, como nodo hijo.
        lista.appendChild(li);
    }
    document.getElementById('urlImagen').value = '';
});
*/

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
        nuevaImagen.addEventListener('click', function() {
            imagenContainer.classList.toggle('seleccionada');
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

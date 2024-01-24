document.getElementById('btnAgregar').addEventListener('click', function() {
    let tarea = document.getElementById('nuevaTarea').value;
    if (tarea) {
        // Obtener elementos lista e item de la lista
        let lista = document.getElementById('listaTareas');
        let li = document.createElement('li');
        // Añadir el texto que el usuario ha escrito en nuevaTarea, al contenido del item
        li.textContent = tarea;
        // Crear un botón con texto Eliminar, que al pulsarlo elimine el item de la lista
        let btnEliminar = document.createElement('button');
        btnEliminar.textContent = 'Eliminar';
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
    document.getElementById('nuevaTarea').value = '';
});

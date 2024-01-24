// Ver ejemplo ut04.2tareaProfesiones y PDF: DAW2 LMSGI UT04.2 Presentación2 -js.pdf


document.getElementById('btnAgregar').addEventListener('click', function() {
    let profesion = document.getElementById('profesion').value;
    let habilidad = document.getElementById('habilidad').value;
    if (profesion && habilidad) {
        // Obtener elementos lista e item de la lista
        let lista = document.getElementById('listaProfesiones');
        let li = document.createElement('li');
        // Añadir el texto que el usuario ha escrito en profesion y habilidad, al contenido del item
        li.textContent = profesion + " - " + habilidad;
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
    document.getElementById('profesion').value = '';
    document.getElementById('habilidad').value = '';
});


// DAW2 LMSGI UT04.2 Presentación2 -js.pdf

// pagina 16/21 SELECCIÓN Y ACCESO A ELEMENTOS
// Acceso a propiedades 
let titulo = document.getElementById('titulo');
console.log(titulo.textContent); // Muestra el texto del elemento con ID 'titulo'

// Modificación de propiedades
titulo.textContent = 'Nuevo Título'; // Cambia el texto del elemento

// Acceso a métodos
titulo.setAttribute('data-id', '123'); // Establece un nuevo atributo
console.log(titulo.getAttribute('data-id')); // Muestra el valor del atributo 'data-id'

// pagina 17/21 CREACIÓN Y MODIFICACIÓN DE ELEMENTOS
// Añadir el nuevo párrafo al final del cuerpo del documento
document.body.appendChild(parrafo);

// insertar un nuevo elemento antes de otro
let contenedor = document.getElementById('contenedor');
contenedor.insertBefore(parrafo, contenedor.firstChild); // Inserta antes del primer hijo

// pagina 18/21 CREACIÓN Y MODIFICACIÓN DE ELEMENTOS
// Eliminar usando removeChild
let elementoAntiguo = document.getElementById('elementoAntiguo');
elementoAntiguo.parentNode.removeChild(elementoAntiguo);

// Eliminar usando remove (método más moderno)
elementoAntiguo.remove();

// Cambiar atributos
let enlace = document.getElementById('mi enlace');
enlace.href = 'https://www.ejemplo.com';

// Modificar contenido HTML interno
let divContenido = document.getElementById('contenido');
divContenido.innerHTML = '<strong>Este es un texto en negrita</strong>';



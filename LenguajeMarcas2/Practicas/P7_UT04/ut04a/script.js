// Definir una función que maneja la suscripción
function suscribir() {
    // Obtener el valor del campo de entrada de email
    var email = document.getElementById('emailInput').value;

    // Verificar si se ingresó un email
    if (email) {
        // Mostrar un mensaje de agradecimiento si se proporcionó un email
        alert('¡Gracias por suscribirte con el correo ' + email + '!');
    } else {
        // Mostrar un mensaje solicitando un email si el campo está vacío
        alert('Por favor, ingresa un correo electrónico.');
    }
}

// Agregar un escuchador de eventos al botón de suscripción
// Se activa cuando se hace clic en el botón
document.getElementById('subscribeButton').addEventListener('click', suscribir);

// Definir una función para cargar noticias desde un RSS
function cargarNoticias() {
    // Realizar una petición para obtener datos de un archivo XML
    fetch('http://localhost/cesdaw2lmtrim2/ut04a/sitioweb2/news.xml')
        .then(response => response.text()) // Convertir la respuesta a texto
        .then(str => new window.DOMParser().parseFromString(str, "text/xml")) // Parsear el texto a XML
        .then(mostrarNoticias) // Llamar a la función para mostrar las noticias
        .catch(err => console.log(err)); // Capturar y mostrar errores en la consola
}

// Definir una función para mostrar las noticias
function mostrarNoticias(data) {

    // Seleccionar todos los elementos 'item' del XML
    const items = data.querySelectorAll("item");
    let html = ""; // Inicializar una variable para el HTML

    // Iterar sobre cada elemento 'item'
    items.forEach(elem => {
        // Agregar el título de la noticia al HTML
        html += `<h2>${elem.querySelector("title").textContent}</h2>`;
        // Agregar la descripción de la noticia al HTML
        html += `<p>${elem.querySelector("description").textContent}</p>`;
        // Agregar un enlace para leer más sobre la noticia
        html += `<a href=>Leer más</a><br>`;
        // Agregar la imagen de la noticia al HTML (si existe)
        let enclosure = elem.querySelector("enclosure");
        if (enclosure) {
            let imageUrl = enclosure.getAttribute('url');
            html += `<img src="${imageUrl}" alt="Imagen de noticia"><br>`;
        }
        html += `<p>${elem.querySelector("description").textContent}</p>`;
    });

    // Seleccionar el bloque del logo
    const chanImage = data.querySelector("image");
    if (chanImage) {
        // Obtener la URL de la imagen
        let imageUrl = chanImage.querySelector("url").textContent;
        // Establecer la imagen en el elemento HTML de idLogo
        document.getElementById("idLogo").innerHTML = `<img src="" alt="Imagen del Canal"><br>`;
    }



    // Establecer el HTML del contenedor de noticias
    document.getElementById("newsContainer").innerHTML = html;
}

// Llamar a la función cargarNoticias al cargar el script
cargarNoticias();




/* SCRIPT EQUIVALENTE

document.getElementById('subscribeButton').addEventListener('click', function() {
    var email = document.getElementById('emailInput').value;
    if (email) {
        alert('¡Gracias por suscribirte con el correo ' + email + '!');
        // En un escenario real, aquí se enviaría el correo electrónico al servidor.
    } else {
        alert('Por favor, ingresa un correo electrónico.');
    }
});

fetch('http://localhost/cesdaw2lmtrim2/ut04a/news.xml')
    .then(response => response.text())
    .then(str => new window.DOMParser().parseFromString(str, "text/xml"))
    .then(data => {
        const items = data.querySelectorAll("item");
        let html = "";
        items.forEach(el => {
            html += `<h2>${el.querySelector("title").textContent}</h2>`;
            html += `<p>${el.querySelector("description").textContent}</p>`;
            html += `<a href="${el.querySelector("link").textContent}">Leer más</a>`;
        });
        document.getElementById("newsContainer").innerHTML = html;
    })
    .catch(err => console.log(err));
*/

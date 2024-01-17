/* 
Poner texto también comentado:
1) Genera un objeto llamado "estudiante" con esos tres campos que solicitábamos a través de un alert. modifica el código para no perder ninguna funcionalidad. Muestra el objeto por consola.
2) Ahora muestra en la web HTML la frase: Me llamo (nombre) (apellidos) y tengo (edad) años. 
3) si es menor de edad, solicita un "si" o un "no" de confirmación al padre. Añade una nueva propiedad al tipo de objeto ya definido, llamada "autorizado", y asigna el valor obtenido del padre al objeto. Vuelve a mostrarlo por consola.
*/

// 1) Generar un objeto llamado "estudiante" con tres campos: nombre, apellidos, y edad.
//    Modificar el código para no perder ninguna funcionalidad y mostrar el objeto por consola.

// Crear un objeto vacío llamado "estudiante".
var estudiante = {};

// Solicitar al usuario los datos mediante alert y asignarlos al objeto.
estudiante.nombre = prompt("Introduce tu nombre:");
estudiante.apellidos = prompt("Introduce tus apellidos:");
estudiante.edad = parseInt(prompt("Introduce tu edad:"));

// Mostrar el objeto por consola.
console.log("Estudiante: ", estudiante);
/* No se ve en la web:
document.write("Estudiante: ", estudiante);

El problema radica en que document.write no procesa objetos de manera directa. 
Cuando intentas usar document.write("Estudiante: ", estudiante);, JavaScript intenta convertir 
el objeto estudiante a una cadena de texto. Sin embargo, la salida no es la que esperas, 
ya que simplemente obtendrás "[object Object]" en lugar de los valores específicos del objeto.
Para mostrar correctamente la información del estudiante, puedes concatenar 
las propiedades del objeto en una cadena y luego utilizar document.write.
Sería algo así:
*/ // Crear una cadena con la información del estudiante.
var infoEstudiante = "Estudiante: " + 
                     "Nombre: " + estudiante.nombre + ", " +
                     "Apellidos: " + estudiante.apellidos + ", " +
                     "Edad: " + estudiante.edad + " años.";
// Mostrar la información en la web usando document.write.
document.write(infoEstudiante);

/* (mejor hecho arriba con el: var infoEstudiante)
// 2) Mostrar en la web HTML la frase: "Me llamo (nombre) (apellidos) y tengo (edad) años."
// Obtener el elemento body del documento.
var body = document.body;
// Crear un elemento de párrafo.
var parrafo = document.createElement("p");
// Asignar el contenido del párrafo con la información del estudiante.
parrafo.textContent = "Me llamo " + estudiante.nombre + " " + estudiante.apellidos + " y tengo " + estudiante.edad + " años.";

// Agregar el párrafo al body del documento.
body.appendChild(parrafo);
*/

// 3) Si es menor de edad, solicitar un "si" o "no" de confirmación al padre.
//    Añadir una nueva propiedad llamada "autorizado" al objeto y asignar el valor obtenido del padre.
//    Volver a mostrar el objeto por consola.

if (estudiante.edad < 18) {
    // Solicitar confirmación al padre.
    var confirmacionPadre = prompt("Eres menor de edad. ¿Autorizado por el padre? (si/no)");

    // Añadir la propiedad "autorizado" al objeto estudiante.
    estudiante.autorizado = confirmacionPadre.toLowerCase() === "si";

    // Mostrar el objeto actualizado por consola.
    console.log("Estudiante actualizado:", estudiante);
    // No se ve en la web el document.write:
    // document.write("Estudiante actualizado: ", estudiante);
}
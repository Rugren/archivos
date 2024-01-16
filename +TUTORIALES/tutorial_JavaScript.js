
// Unidad 2: UD02_DWEC.pdf

// página 4/71 (Reglas básicas para variables en JavaScript)
var a = "hola";
var x = 4;
// var pi = 3.14; Se aconseja poner una constante, ya que el valor del número pi no cambia:
const PI = 3.141592; // por convención, se suele utilizar mayúsculas cuando se definen constantes. (pag 19/71)

// Se pueden escribir con comillas simples o dobles:
var s1 = "hola";
var s2 = 'hola';

// página 5/71
var t = 4;
var x = (5*t) / 2+1;
var y;
y = x*2;

// la mayúscula en la misma variable hace que sea distinta
var nombre = "Julio";
var Nombre = "Rubén";

// página 15/71
var edad = 31; // Number
var nombre = "Pedro"; // String
var asignatura = ["lengua", "mates", "inglés"]; // Array
var persona = {nombre: "Rubén", apellido: "García"}; // Objeto

var dato = "Ronaldo" + 10;
var dato = "Ronaldo" + "10";
// JavaScript interpretará el número como un string.

// página 16/71
/* Para poner las comillas sin que interfieran en el código:
\': Comilla simple
\": Comilla doble
\\: Barra invertida
\n: Nueva línea
\r: Retorno de carro
\t: Tabulación horizontal
\v: Tabulación vertical
\f: Avance o salto de página
\b: Retroceso

\uXXXX: Representación Unicode, donde XXXX es el código hexadecimal del carácter Unicode.
*/

// con el console.log lo vemos nosotros solo, no se ve en el código html
console.log('Comilla simple: \'');
console.log("Comilla doble: \"");
console.log('Barra invertida: \\');
console.log('Nueva línea:\nSegunda línea');
console.log('Tabulación:\tTexto tabulado');
console.log('Retroceso: Texto\bcon retroceso');
console.log('Avance de página: Texto\fcon avance de página');
console.log('Tabulación vertical: Texto\vcon tabulación vertical');
console.log('Código Unicode: \u03A9'); // Ejemplo con el carácter Omega (Ω)
// Estas secuencias de escape son útiles para representar caracteres especiales en cadenas de texto dentro de tus programas JavaScript.

// Poner esto dentro de un script en html: 
var textoSecuencias = "I\'m \"hungry\"";
// Al imprimilo no habrá ningún problema, imprimirá I'm "hungry"
document.write(textoSecuencias);

// página 18/71 para declarar variables en JavaScript
var mi_variable_1 = 39;
var mi_variable_2 = mi_variable_1 + 10;
var mi_variable_3 = prompt('introduce aquí un valor');
/* El método window.prompt() muestra un diálogo con mensaje opcional, 
que solicita al usuario que introduzca un texto 
por ejemplo:
var apellido = prompt("¿Cual es tu apellido?");
*/

/* El valor null hace referencia a nada o algo no existente
Cuando se asigna null a una variable es porque es o será un objeto: */
var persona2 = null;
var persona2 = {nombre: "Rubén", apellido: "García"}; // Objeto


/* página 20/71 ejercicio hecho en carpeta de xampp archivos EntornoCliente EjemplosClase E2, ruta en xampp:
http://localhost/archivos/EntornoCliente/EjemplosClase/E2/index.html
*/



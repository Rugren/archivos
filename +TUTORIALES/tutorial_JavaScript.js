
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

/* página 24/71
En JavaScript se utilizan los operadores + y += para concatenar strings
var = "hola" + " " + "mundo";
Es lo mismo que esto:
var = "hola";
var += " ";
var += "mundo";
(los coge mal)
*/

/* página 24-25-26/71
- typeof - Devuelve el tipo de una variable
instanceof - Devuelve true si un objeto es una instancia de un tipo de objeto

- if - Mediante if/else se permite plantear una condición que según si se cumpla o no se realizarán 
diferentes acciones.

- switch - El switch tiene un único bloque de instrucciones y los distintos casos 
se comportan como etiquetas. Es necesario emplear la instrucción break para no seguir con la 
ejecución del siguiente caso (y salir del switch). La cláusula default es opcional.

Bucles (repiten un mismo bloque de código varias veces hasta que se cumpla una condición específica):
- while: Se ejecutarán las instrucciones de dentro del bucle while hasta que la 
condición se avalúe a falso. En dicho momento finalizará el bucle.
- do/while
- for: Un bucle for se utiliza cuando se sabe a priori cuantas veces se tiene que repetir 
unas determinadas instrucciones.
*/

/* página 27/71 ejercicio hecho en carpeta de xampp
http://localhost/archivos/EntornoCliente/EjemplosClase/E2/index.html (como el de arriba pág 20/71)
*/

// página 28/71 Palabras reservadas
/*
var
if... else
for
do... while
switch
break: termina un switch o un bucle
continue: Sale del bucle y se coloca al comienzo de este.
function: Declara una función.
return: Sale de una función. Finaliza una función y devuelve un valor.
try... catch: Utilizadas para el manejo de excepciones.
*/

// página 29-30/71 Conversiones entre tipo de datos
/* 
String() Convierte un valor a una cadena
Number() Convierte un valor a numérico
parseInt(): Convierte una cadena o string a un número entero.
parseFloat(): Convierte una cadena o valor a un número decimal.
*/
alert("Entero: " + parseInt("9.99")); // mostrará -> Entero: 9
alert("Float: " + parseFloat("9.99")); // mostrará -> Float: 9.99
/*
toDateString() Convierte una variable de tipo fecha a cadena
toUTCString() Convierte la hora en formato UTC a cadena
*/
var fecha = new Date();
var cadena = fecha.toDateString(); 
// Ahora cadena contendrá la fecha actual "Sun, 13 Jan 2019"

// var fecha = new Date(); (no hace falta crearla de nuevo)
var cadena = fecha.toUTCString(); 
// Ahora cadena contendrá la fecha actual en formato UTC "Sun, 13 Jan 2019 07:45:49 GMT"

var num = 999;
num.toString(); // devolverá 999 pero como cadena de caracteres.

// página 31-32/71 Objetos JavaScript
/* Un objeto es como una variable especial que puede contener más variables en su interior.
Así podemos organizar múltiples variables de la misma temática en el interior de un objeto.
*/

var perro = {raza:"Podenco", peso:12, altura:58, color:"negro"};

var myCar = new Object();
myCar.make = "Ford";
myCar.model = "Mustang";
myCar.year = "1969";

function Car(make, model, year){
    this.make = make;
    this.model = model;
    this.year = year;
}

var myCar = new Car("Eagle", "Talon TSI", 1993);
console.log(myCar.make); // Mostrará Eagle
console.log(myCar.model); // Mostrará Talon TSI
console.log(myCar.year); // Mostrará 1993

myCar.color; // undefined

// Acceso a los atributos de una variable de tipo objeto:
perro.raza; // devuelve Podenco
// También se puede poner:
perro["raza"]; // devuelve Podenco

// Añadir una propiedad nueva a un tipo de objeto ya definido:
/* Para ello usamos prototype.
En el siguiente ejemplo se añade la propiedad color a todos los objetos del tipo Car,
y luego se le asigna el valor "black" al objeto car1, 
que ya existía antes de agregar esta propiedad nueva.
*/
Car.prototype.color = null;
Car1.color = "black";


/* página 33/71 ejercicio hecho en carpeta de xampp
http://localhost/archivos/EntornoCliente/EjemplosClase/E3/index.html

Hecho de otra manera, pero no mejor que el otro: 
E3_2.js
indexE3_2.html
http://localhost/archivos/EntornoCliente/EjemplosClase/E3/indexE3_2.html
*/

// página 34/71 FUNCIONES
function suma(a, b) {
    return a + b;
}
/* Una función puede tener 0, una o varios parámetros.
El código de la función estará dentro de las llaves { y }.
La función devolverá el resultado con la sentencia return.
*/
var c = suma(3, 3); // c valdrá 6
c = suma(c, 3); // ahora c valdrá 9
var text = "El valor de c será ahora: " + c;

// página 35/71 Variables globales y locales:
var tester = "hey, hola";
function nuevaFuncion(){
    var hola = "hola";
}
console.log(hola); // error: hola is not defined
/* 
- La variable tester(como si se le llama saludo): es global, 
por tanto puede utilizarse en otras funciones.

- La variable hola: es local, solo existirá dentro de la función donde se ha declarado.

Las variables, y sus valores, desaparecen cuando se cierra la página web.
/*

// página 36-37-38/71 Diferencias entre var, let y const:
/*
- var: si se declara con var, puede utilizarse fuera del bloque donde ha sido declarada.
- let: si se declara con let, solo puede utilizarse dentro del bloque donde ha sido declarada, 
es decir, no puede utilizarse fuera del bloque donde ha sido declarada.
let se utiliza para declarar variables en un bloque determinado.

- const: para definir constantes (vimos un ejemplo antes, buscar const en las primeras líneas de código)
*/
let saludar = "dice Hola";
let tiempos = 4;
if (tiempos > 3){
    let hola = "dice Hola también";
    console.log(hola); // "dice Hola también" 
}
console.log(hola) // hola is not defined

// Problema con var:
/* comentado para que no interfiera y de error con el código anterior, ya que son iguales.
var saludar = "hey, hola";
var tiempos = 4;
if (tiempos > 3){
    var saludar = "dice Hola también";
}
console.log(saludar) // "dice Hola también"
*/
/*
Por lo tanto, como tiempos > 3 devuelve true, saludar se redefine para "dice Hola también".
Aunque esto no es un problema si quieres redefinir saludar a conciencia, se convierte en un
problema cuando no te das cuenta de que la variable saludar ha sido definida antes.

A diferencia de una var, una variable let no puede ser re-declarada dentro de su ámbito.

Así que mientras esto funciona:
let edadPersonal = "tengo 30 años";
edadPersonal = "tengo 30 también"

Así no funcionaría:
let edadPersonal = "tengo 30 años";
let edadPersonal = "tengo 30 también"; // error: Identifier 'edadPersonal' has already been decla...
// comentado para que no influya con el siguiente edadPersonal:
*/

let edadPersonal = "tengo 30 años";
if (true) {
    let edadPersonal = "tengo 30 también";
    console.log(edadPersonal); // "tengo 30 también";
}
console.log(edadPersonal); // "tengo 30 años"
// En diferentes ámbitos o bloque si se puede.









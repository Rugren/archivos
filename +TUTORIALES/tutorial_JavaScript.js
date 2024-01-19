
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

/* página 21-22-23/71 Operadores
ver más en: https://developer.mozilla.org/es/docs/Learn/JavaScript/First_steps/Math

Operadores Aritméticos:
Operador	Nombre	        Propósito	Ejemplo
+	        Adición	        Suma dos números juntos.	6 + 9
-	        Resta	        Resta el numero de la derecha del de la izquierda.	20 - 15
*	        Multiplicación  Multiplica dos números juntos.	3 * 7
/	        División	    Divide el número de la izquierda por el de la derecha.	10 / 5
%	        Sobrante (también llamado Módulo)	Retorna el restante después de dividir el número de 
la izquierda en porciones enteras del de la derecha. 
Por ejemplo 8 % 3 (retorna 2, como tres está dos veces en 8, quedando 2 restantes.) (8/3=2 y 2x3=6 y 8-6="2" resultado)

++ Incremento
-- Decremento

Operadores Lógicos:
&&  Y
||  O
!   No

Operadores de asignación:
var x = 3; // x contiene el valor 3
var y = 4; // y contiene el valor 4
x = y; // x ahora contiene el mismo valor de y... 4

Operador	Nombre	                    Ejemplo	            Atajo de:
=                                       x = y;
+=	        Adición asignación	        x = 3; x += 4;	    x = 3; x = x + 4;
Suma el valor de la derecha al valor de la variable de la izquierda y returna el nuevo valor

-=	        Resta asignación	        x = 6; x -= 3;	    x = 6; x = x - 3;
*=	        Multiplicación asignación	x = 2; x *= 3;	    x = 2; x = x * 3;
/=	        División asignación	        x = 10; x /= 5;	    x = 10; x = x / 5;
%=                                      x %= y              igual que (x = x % y)

Operadores de comparación:
Operador    Nombre                                      Propósito                                                               Ejemplo
==          Igual
!=          Diferente
===	        Igual estricto o estrictamente igual	    Comprueba si los valores izquierdo y derecho son idénticos entre sí	    5 === 2 + 4
!==	        Igual no-estricto o estrictamente diferente Comprueba si los valores izquierdo y derecho no son idénticos entre sí	5 !== 2 + 3
<	        Menor que	                                Comprueba si el valor izquierdo es menor que el derecho.	            10 < 6
>	        Mayor que	                                Comprueba si el valor izquierdo es mayor que el derecho.	            10 > 20
<=	        Menor o igual a.	                        Comprueba si el valor izquierdo es menor o igual que el derecho.	    3 <= 2
>=	        Mayor o igual a.	                        Comprueba si el valor izquierdo es mayor o igual que el derecho..	    5 >= 4

Operadores Condicionales:
?:  (es el símbolo de interrogración y los 2 puntos: "?:") Condicional.
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
/* +++
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
Solución: el uso de let.

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


// página 39/71 EVENTOS
/*
Los eventos son cualquier suceso que le pueda ocurrir a un elemento en HTML.
JavaScript puede darse cuenta de ese evento y reaccionar a este 
ejecutando el código que se haya programado.

Algunos eventos:
- Pulsar un botón
- Modificar un campo de texto
- Pulsar una tecla
- La página ha terminado de cargarse
- Hacer clic sobre un elemento HTML.

Formato (comillas simples o dobles): <Elemento_HTML evento='codigo_JavaScript'>
*/
<button onclick='this.innerHTML=Date()'>Pulsa para saber la hora 0</button>
// Ponerlo en el html (no dentro de un script):
// para hacerlo bien así:
        function mostrarHora() {
            var boton = document.getElementById('botonHora');
            boton.innerHTML = Date();
        }
<button onclick="mostrarHora()" id="botonHora">Pulsa para saber la hora 1</button>
/* ponerlo en el html así:

    <script>
        function mostrarHora() {
            var boton = document.getElementById('botonHora');
            boton.innerHTML = Date();
        }
    </script>
    <button onclick="mostrarHora()" id="botonHora">Pulsa para saber la hora 1</button>
*/

// página 40-41-42/71 TIPOS DE EVENTOS
/*
EVENTOS EN CAMPO DE TEXTO
Evento:     Ejecutado:
onblur      Cuando se abandona un campo de entrada
onchange    Cuando se cambia el contenido de un campo de entrada 
            o cuando un usuario selecciona un valor de una lista desplegable.
onfocus     Cuando obtiene el foco un campo de entrada
onselect    Cuando se selecciona el texto de entrada
onsubmit    Cuando se hace clic en el botón de enviar
onreset     Cuando se hace clic en el botón de reinicio
onkeydown / onkeypress  Cuando se presiona o mantiene presionada una tecla.
onkeyup     Cuando se deja de presionar una tecla

EVENTOS RELATIVOS AL RATÓN
Evento:     Ejecutado:
onclick     Cuando se hace clic en un botón
ondbclick   Cuando se hace doble clic en un texto
onmousedown / onmouseup Al presionar o soltar un botón del ratón
onmousemove  Al mover el puntero del ratón sobre una imagen
onmouseout   Al mover el puntero del ratón fuera de una imagen
onmouseover  Al mover el ratón sobre una imagen
onmouseout   Al mover el ratón fuera de una imagen

EVENTOS DE CARGA
Evento:     Ejecutado:
onload      Cuando se carga una imagen o una página
onerror     Cuando se produce un error al cargar una imagen
onunload    Cuando el navegador cierra el documento (página web)
onresize    Cuando se cambia el tamaño de la ventana del navegador.
*/

// página 46-48/71 Ejercicio 1 y 2
// Es E4: http://localhost/archivos/EntornoCliente/EjemplosClase/E4/e4.html
// aquí están esos 2 ejercicios y otras variaciones buenas para entender. Incluso poner una imagen de fondo.

// página 52/71 FECHAS
/*
Formatos:
Formato corto
Formato largo
Formato completo
Formato ISO
*/

var v = new Date("08/16/2016"); // Formato corto
var v = new Date("Ago 16 2016"); // Formato largo
var v = new Date("Fri Ago 16 2019 12:15:24 GMT+0100 (W. Europe Standard Time)"); // Formato completo
var v = new Date("2019-08-16"); // Formato ISO

// Métodos para los objetos tipo fecha:
/* 
getDate()   Obtiene el día del mes (1-31)
getDay()    Obtiene el día de la semana en formato numético (0-6)
getFullYear() Obtiene el año (2023, por ejemplo)
getHours()  Devuelve las horas actuales
getMilliseconds() Devuelve los milisegundos actuales
getMinutes() Devuelve los minutos actuales
getMonth()   Devuelve el mes actual
getSeconds() Devuelve los segundos actuales
getTime()   Devuelve la hora actual en milisegundos desde el 1 de enero de 1970.

Por ejemplo, new Date().getMonth()
*/
new Date().getMonth()

// página 56/71 Ejercicio
// archivo: fecha_y_hora.html http://localhost/archivos/EntornoCliente/EjemplosClase/fecha_y_hora.html

// Obtener la fecha actual:
let fechaActual = new Date();
console.log(fechaActual);

// Crear una fecha específica:
// Año, mes (0-11), día
let fechaEspecifica = new Date(2022, 0, 1); // 1 de enero de 2022
console.log(fechaEspecifica);

// Obtener componentes de la fecha:
let fecha = new Date();
let año = fecha.getFullYear();
let mes = fecha.getMonth(); // Devuelve un número entre 0 (enero) y 11 (diciembre)
let dia = fecha.getDate();
let hora = fecha.getHours();
let minutos = fecha.getMinutes();
let segundos = fecha.getSeconds();

console.log(`${año}-${mes + 1}-${dia} ${hora}:${minutos}:${segundos}`);


// Operaciones con fechas:
let fecha1 = new Date(2022, 0, 1);
let fecha2 = new Date(2022, 0, 10);

// Restar dos fechas para obtener la diferencia en milisegundos
let diferenciaEnMilisegundos = fecha2 - fecha1;

// Convertir la diferencia a días
let diferenciaEnDias = diferenciaEnMilisegundos / (1000 * 60 * 60 * 24);

console.log(`La diferencia entre las fechas es de ${diferenciaEnDias} días.`);


// Formatear una fecha:
let fecha = new Date();
let options = { year: 'numeric', month: 'long', day: 'numeric' };
let fechaFormateada = fecha.toLocaleDateString('es-ES', options);

console.log(`La fecha formateada es: ${fechaFormateada}`);

// página 58/71 ver en: (ahí mejorado)
// archivo: fecha_y_hora.html http://localhost/archivos/EntornoCliente/EjemplosClase/fecha_y_hora.html


// página 63/71 BUCLES
/*
- Bucle for: Se utiliza esta sentencia cuando se quiere ejecutar un bloque de código una serie 
de veces determinada (normalmente se conoce de antemano el número de veces).

- Bucle while: Se emplea esta sentencia cuando se desea ejecutar un bloque de código una serie
de veces sin conocer de antemano cuántas.
El bloque de código se ejecutará mientras se cumpla una condición determinada.
*/

// ejemplo bucle for:
for (i = 0; i<=10; i++) {
    text += "Número: " + i + " ";
}

/* esto puesto en el html del tutorial
// var dd = 75;
var dd = "";
for (i = 0; i<=10; i++) {
    dd += "Número: " + i + " ";
}
console.log(dd);
*/

// página 65/71
// ejemplo bucle for:
/* *da error el while, no sé por qué no lo coge, si está en los ejercicios así.
i = 0;
while (i<=10) {
    text += "Número: " + i;
    i++;
}
*/

// página 66/71 RECORRER ARRAYS
// Mediante el recorrido clásico:
/* // no está creada la variable dias aquí
for (i = 0; i<dias.length; i++) {
    console.log(dias[i]);
}
*/
// Mediante el método forEach():
var dias = ['Lunes', 'Martes', 'Miercoles','Jueves', 'Viernes', 'Sabado', 'Domingo'];
dias.forEach(muestra);
// "muestra" es una función que será invocada por cada uno de los elementos del array "dias".
// no va el forEach con la funcion "muestra": dias.forEach(muestra);
console.log(dias);



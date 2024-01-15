
var textoIntroducido = prompt("Introduce una palabra o varias cadenas de texto:");
var numchar = textoIntroducido.length;    // nos da la longitud del string.
textoIntroducido = textoIntroducido.toUpperCase();  // (si no ponemos esto, solo nos cogerá las palabra en mayúsculas, con esto acepta palabras en minúsculas) nos da el string en mayúsculas.
var vocal;
var contador = 0;
var i;
for (i = 0; i < numchar; i++) { // aquí para que compruebe con el .charAt palabra por palabra
    vocal = textoIntroducido.charAt(i);    // coge la vocal de la palabra o palabras, i del string.
    if ((vocal == "A") || (vocal == "E") || (vocal == "I") || (vocal == "O") || (vocal == "U")) {
        contador++;
    }
}
document.write("Número de vocales de la palabra o palabras introducidas: " + contador + ".");


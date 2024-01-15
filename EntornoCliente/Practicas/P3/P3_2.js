
var suma = 0;
do {
    var numero = prompt("Introduce un numero. Pulsa 666 para finalizar");
    if (Number(numero) == numero) {
        numero = Number(numero); // para convertir el número en integer (si quito esta línea, si pongo 10 + 20 me pone 1020, si la dejo me da la suma 30.)
        suma = suma + numero;
    }
    else { // Si no es un número deberá indicarse con un «alert» y seguir pidiendo:
        if (numero != undefined) {
            alert(numero + " No es un numero");
        }
    }
} while (numero != "666"); // Mientras no pulsemos 666, no cancela. // si ponía  -while (numero != undefined);- o  -while (numero != undefined || numero == "666");- no funcionaban
document.write(suma - "666"); // Si pulsamos cancelar o 666 salimos del bucle e imprimimos el resultado. // Le hemos restado - "666" para que lo quite, porque lo sumaba.

var numero = Number(prompt("Introduce un número entre 1 y 100"));
if((numero >= 1) && (numero <= 100)) {
    var x = 0;
    var y = 1;
    var z;
    // IMPRIMIMOS EL PRIMER NÚMERO QUE SERÁ UN 0 Y NO SE PUEDE METER EN EL BUCLE
    document.write(x + "<br>");
    // BUCLE PARA IMPRIMIR EL RESTO DE NÚMEROS (numero-1 porque ya imprimimos uno)
    for (i = 0; i < (numero-1); i ++) {
        z = x + y;
        document.write(z + "<br>");
        y = x;
        x = z;
    }
}
else {
    alert("Número erróneo");
}
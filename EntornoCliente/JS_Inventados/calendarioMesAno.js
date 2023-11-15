// PEDIMOS EL MES Y EL AÑO EN NÚMERO
var mes = Number(prompt("Introduce Mes (en número)"));
var ano = Number(prompt("Introduce Año"));
// RESTAMOS 1 AL MES PORQUE EN JAVASCRIPT VAN DE 0-11
mes = mes - 1;

// CREAMOS UN OBJETO FECHA CON LOS DATOS
var fecha = new Date(ano, mes);
var vardia = fecha.getDay();    //getDay() devuelve el dia de la semana.(0-6).

// CALCULAMOS EL NOMBRE DEL MES SEGÚN EL NÚMERO
switch (mes) {  //Algoritmo para saber el nombre del mes.
    case 0:
        mesletras = "Enero";
        break;
    case 1:
        mesletras = "Febrero";
        break;
    case 2:
        mesletras = "Marzo";
        break;
    case 3:
        mesletras = "Abril";
        break;
    case 4:
        mesletras = "Mayo";
        break;
    case 5:
        mesletras = "Junio";
        break;
    case 6:
        mesletras = "Julio";
        break;
    case 7:
        mesletras = "Agosto";
        break;
    case 8:
        mesletras = "Septiembre";
        break;
    case 9:
        mesletras = "Octubre";
        break;
    case 10:
        mesletras = "Noviembre";
        break;
    case 11:
        mesletras = "Diciembre";
        break;
}
// iMPRIMIMOS EL TÍTULO CON EL NOMBRE DEL MES Y EL AÑO
document.write("<h1>" + mesletras + " de " + ano + "</h1>");

// HACEMOS UN BUCLE QUE SE REPITA MIENTRAS EL MES NO CAMBIE
while (fecha.getMonth() == mes) {

    // CALCULAMOS EL DIA DE LA SEMANA SEGÚN EL NÚMERO
    switch (fecha.getDate()) { // Algoritmo para calcular el dia según el número.
        case 0:
            dia = "Domingo";
            break;
        case 1:
            dia = "Lunes";
            break;
        case 2:
            dia = "Martes";
            break;
        case 3:
            dia = "Miercoles";
            break;
        case 4:
            dia = "Jueves";
            break;
        case 5:
            dia = "Viernes";
            break;
        case 6:
            dia = "Sabado";
            break;
    }
    // IMPRIMIMOS EL DÍA Y EL DIA DE LA SEMANA
    document.write(fecha.getDate() + "(" + dia + ")<br>");

    // SUMAMOS 1 DÍA AL OBJETO FECHA
    fecha.setDate(fecha.getDate() + 1);
}
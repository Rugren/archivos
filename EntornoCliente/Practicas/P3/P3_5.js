
// Para calcular el Área de un cuadrado
const cuadradoLargo = document.getElementById("cuadrado_Largo");
const cuadradoAncho = document.getElementById("cuadrado_Ancho");
const botonAreaRectangulo = document.getElementById("calculo_areaRectangulo");
const pResultadoAreaRectangulo = document.getElementById("resultado_areaRectangulo");

botonAreaRectangulo.addEventListener('click', calculo_areaRectangulo);

function calculo_areaRectangulo() {
    const cuadrado_Largo = parseFloat(cuadradoLargo.value);
    const cuadrado_Ancho = parseFloat(cuadradoAncho.value);

    if (!isNaN(cuadrado_Largo) && !isNaN(cuadrado_Ancho)) {
        const resultado_areaRectangulo = cuadrado_Largo * cuadrado_Ancho;
        pResultadoAreaRectangulo.style.color = "black";
        pResultadoAreaRectangulo.innerText = "= " + resultado_areaRectangulo;
    } else {
        pResultadoAreaRectangulo.style.color = "red";
        pResultadoAreaRectangulo.innerText = "Cálculo imposible";
    }
}


// Para calcular el Área de un Triángulo
const trianguloBase = document.getElementById("triangulo_Base");
const trianguloAltura = document.getElementById("triangulo_Altura");
const botonAreaTriangulo = document.getElementById("calculo_areaTriangulo");
const pResultadoAreaTriangulo = document.getElementById("resultado_areaTriangulo");

botonAreaTriangulo.addEventListener('click', calculo_areaTriangulo);

function calculo_areaTriangulo() {
    const triangulo_Base = parseFloat(trianguloBase.value);
    const triangulo_Altura = parseFloat(trianguloAltura.value);

    if (!isNaN(triangulo_Base) && !isNaN(triangulo_Altura)) {
        const resultado_areaTriangulo = (triangulo_Base * triangulo_Altura) / 2;
        pResultadoAreaTriangulo.style.color = "black";
        pResultadoAreaTriangulo.innerText = "= " + resultado_areaTriangulo;
    } else {
        pResultadoAreaTriangulo.style.color = "red";
        pResultadoAreaTriangulo.innerText = "Cálculo imposible";
    }
}

// Para calcular el Área de un Círculo

function calcularAreaCirculo(radio) {
    const pi = Math.PI;
    const areaCirculo = pi * Math.pow(radio, 2);
    // return areaCirculo;
    return areaCirculo.toFixed(2); // el .toFixed redondea a dos decimales y solo se pone aquí en el return de la función. Si lo pongo en otro sitio más no funciona.
}

/*
const radio = 5; // poner el radio que queramos, 5, 10 o el que queramos para calcularlo con este ejemplo
const areaDelCirculo = calcularAreaCirculo(radio);
console.log("El área del círculo es: " + areaDelCirculo);
*/

document.getElementById("botonCalcularAreaCirculo").addEventListener('click', function () {
    const radio = parseFloat(document.getElementById("radioInput").value);
    const areaCirculo = calcularAreaCirculo(radio);
    // document.getElementById("resultadoArea").textContent = "El área del círculo es: " + areaCirculo; // ESTO SI LE DAN AL ENTER CON EL CAMPO VACÍO sale NaN (como un error), por eso lo hemos arreglado y metido en el if

    if (!isNaN(areaCirculo)) { // ESTO SI QUIERO QUE LO HAGA SI LE DAN AL ENTER CON EL CAMPO VACÍO, para que no de el error NaN
        document.getElementById("resultadoAreaCirculo").textContent = areaCirculo;

    } else {
        resultadoArea.style.color = "red";
        resultadoArea.innerText = "Cálculo imposible";
    }
});

// Más facil, CREADO ESTE EJERCICIO EN: C:\xampp\htdocs\archivos\EntornoCliente\JS_Inventados radioCirculo.html y radioCirculo.js
// // Calcular el área de un círculo.
// var radio = prompt("Introduce el radio del círculo");
// var area = Math.PI * Math.pow(radio, 2);
// alert("El area del circulo es de : " + area);
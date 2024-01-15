
const txtOp1 = document.getElementById("op1")
const txtOperacion = document.getElementById("operacion")
const txtOp2 = document.getElementById("op2")
const btnCalcular = document.getElementById("calcular")
const pResultado = document.getElementById("resultado")

btnCalcular.addEventListener('click', calcular)

function calcular() {
    const operacion = txtOperacion.value
    const op1 = parseFloat(txtOp1.value)
    const op2 = parseFloat(txtOp2.value)

    if ((operacion == "+" || operacion == "-" || operacion == "*" || operacion == "/") && !isNaN(op1) && !isNaN(op2)) {
        let resultado;
        switch (operacion) {
            case "+":
                resultado = op1 + op2
                break;
            case "-":
                resultado = op1 - op2
                break;
            case "*":
                resultado = op1 * op2
                break;
            case "/":
                resultado = op1 / op2
                break
        }
        pResultado.style = "color:black"
        pResultado.innerText = "= " + resultado
    } else {
        pResultado.style = "color:red"
        pResultado.innerText = "Calculo imposible"
    }
}

/*
const cuadradoLargo = document.getElementById("cuadrado_Largo")
// const formulaAreaRectangulo = document.getElementById("formula_AreaRectangulo") // aqui meter que haga la formula 
const cuadradoAncho = document.getElementById("cuadrado_Ancho")
const botonAreaRectangulo = document.getElementById("calculo_areaRectangulo")
const pResultadoAreaRectangulo = document.getElementById("resultado_areaRectangulo")

botonAreaRectangulo.addEventListener('click', calculo_areaRectangulo)

function calculo_areaRectangulo() {
    // const formula_AreaRectangulo = formulaAreaRectangulo.value
    const cuadrado_Largo = parseFloat(cuadradoLargo.value)
    const cuadrado_Ancho = parseFloat(cuadradoAncho.value)
    
    if (!isNaN(cuadrado_Largo) && !isNaN(cuadrado_Ancho)) { // isNaN, si están en número o pasados a número hace la acción
        let resultado_areaRectangulo = cuadradoLargo * cuadradoAncho
    pResultadoAreaRectangulo.style = "color:black"
    pResultadoAreaRectangulo.innerText = "= " + resultado_areaRectangulo
} else {
    pResultadoAreaRectangulo.style = "color:red"
    pResultadoAreaRectangulo.innerText = "Calculo imposible"
}
}
*/

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
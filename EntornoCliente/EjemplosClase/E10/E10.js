/* Método Fibonacci 

    hacer un prompt para que pida un número y que corte 
    
    var numero = prompt("Introduce un numero para calcular su número Fibonacci");

    hacer con una función recursiva, que se llame a sí misma.

*/

/* https://jfbarrios.hashnode.dev/3-formas-de-obtener-el-fibonacci-de-un-numero-en-javascript */


// window.addEventListener("load", n);
var fib = prompt("Introduce un Nº para calcular su número Fibonacci");

/*
var fib = function(n) {
    if (n <= 1) return n;

    return fib(n-1) + fib(n-2);
}
*/

/*
var fib = function(n) {
    const map = new Map(); // creamos un mapa para guardar los valores

    const dp = (x) => {
        if (x <= 1) return x;

        if (!map.has(x)) { // si NO hemos calculado el resultado
            map.set(x, dp(x-1) + dp(x-2)) // lo calculamos y guardamos el valor
        }

        return map.get(x);
    }

    return dp(n);
};

var fib = function(n) {
    const sol = [0, 1];

    for (let i = 2; i<= n; i++) {
        sol[i] = sol[i -1] + sol[i - 2];
    }

    return sol[n];
};
*/

/*
var fib = function(n) {

    if (n <= 1) return n;

    let prev2 = 0;
    let prev1 = 1;
    let c = 0;

    for (let i = 2; i<= n; i++) {
        c = prev1 + prev2;
        prev2 = prev1;
        prev1 = c;
    }

    return c;
};
*/

function fibonacci2(numInteraciones,arr=[0,1],i=1){
    if(i<numInteraciones){
        arr.push(arr[i-1] + arr[i]);
        i+=1;
        fibonacci2(numInteraciones,arr,i);
    } else{
        console.log(arr);
    }
}
fibonacci2(10);

console.log("Hola");

window.addEventListener("load", comprobarNotas);
//class P3_1 { // la clase que tenemos que llamar en el indexP3_1.html

// +++ COMO QUIERE EL PROFESOR, PONIENDO window.addEventListener Y PONIENDO function al comprobarNotas

  function comprobarNotas(){ // +++Este es el método "comprobarNotas()" de la clase P3_1 que llamaremos en el <head> del indexP3_1.html
  do {
    var nota = prompt("Introduce tu nota"); // en el prompt pide la nota por teclado
    if (Number(nota) == nota) {
      if (nota >= 0 && nota <= 10) {
        if (nota <= 3) {
          alert("Muy deficiente");
        }
        else if (nota < 5) {
          alert("Insuficiete");
        } else if (nota < 6) {
          alert("Suficiente");
        } else if (nota < 7) {
          alert("Bien");
        } else if (nota < 9) {
          alert("Notable"); 5
        } else if (nota >= 9) {
          alert("Sobresaliente");
        }
      }
      else {
        alert("Nota erronea, debe ser un número entre 0 y 10");
      }
    }
    // Si no se introduce un número:
    else {
      // Si se pulsa sin introducir nada
      if (nota != undefined) { // (No es Undefined cuando se pulsa aceptar)
        alert("Introduce un número entre el 0 y el 10");
      }
    }
    // El bucle se está ejecutando hasta que no se pulse cancela o se pulse exit.
  }
  while (nota != undefined); // Undefined es cuando se pulsa Cancelar.

//}
}


// console.log("Hola");

class P3_1OtraManera { // la clase que tenemos que llamar en el index1.html

comprobarNotas(){ // +++Este es el método "comprobarNotas()" de la clase P3_1OtraManera que llamaremos en el <head> del index1.html
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
    // Si no se introduce un número y pone texto por ejemplo:
    else {
      // Si se pulsa sin introducir nada
      if (nota != undefined) { // (No es Undefined cuando se pulsa aceptar)
        alert("Introduce un número entre el 0 y el 10");
      }
    }
    // El bucle se está ejecutando hasta que no se pulse cancela o se pulse exit.
  }
  while (nota != undefined); // Undefined es cuando se pulsa Cancelar.

}
}


// console.log("Hola");
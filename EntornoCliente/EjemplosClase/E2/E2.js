var nombre = prompt("¿Cual es tu nombre?");
var apellido = prompt("¿Cual es tu apellido?");
var edad = prompt("¿Cual es tu edad?");

var añoNacimiento = 2023 - edad;

if(edad >= 18){
    alert("Tu has nacido en " + añoNacimiento + " y eres mayor de edad");
}else{
    alert("Tu has nacido en " + añoNacimiento + " y eres menor de edad");
}

console.log("Hola " + nombre + " " + apellido + " tienes " + edad + " años. Vamos");
// esto añadido por mi cuenta el 16/01/2024 
document.write("Hola " + nombre + " " + apellido + " tienes " + edad + " años ");
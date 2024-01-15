let estudiante = new Object();

estudiante.name = prompt("Nombre:")
estudiante.apellidos = prompt("Apellidos:")
estudiante.edad = prompt("Edad:")

if(estudiante.edad < 18){
    estudiante.autorizado = prompt("Lo autorizas?");
    document.write("Tu nombre es " +estudiante.name + " " + estudiante.apellidos + " y tienes " + estudiante.edad + " años y " + estudiante.autorizado + " estas autorizado");
    
}else{
    document.write("Tu nombre es " +estudiante.name + " " + estudiante.apellidos + " y tienes " + estudiante.edad + " años")

}

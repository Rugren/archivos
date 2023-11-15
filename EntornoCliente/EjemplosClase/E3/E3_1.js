function estudiante(nombre, apellido, edad){
    this.nombre = nombre;
    this.apellido = apellido;
    this.edad = edad;
}

var alumno1 = new estudiante("Rubén", "García", 31);
var alumno2 = new estudiante("Francisco", "Estrada", 20);

estudiante.Prototype.ciudad = null;
alumno1.ciudad = "Madrid";
alumno2.ciudad = "Murcia";

document.write("Estudiantes con sus datos");



// Array bimimensional - Arrays bimimensionales (Tema 4 pag 10/20)
// Crear 5 equipos con 1 jugador cada uno


// array bidimensional de 5 equipos
var equipo = new Array();
equipo[0] = new Array("Girona", "Pepe");
equipo[1] = new Array("Madrid", "Vinicius");
equipo[2] = new Array("Athletic", "Mbappé");
equipo[3] = new Array("Barcelona", "Messi");
equipo[4] = new Array("Athlético de Madrid", "Griezman");
console.log(equipo[1]); // Mostrará "Madrid", "Vinicius"
console.log(equipo[1][1]); // Mostrará "Vinicius"

// Bucle for para que me muestre solo los equipos
console.log("Bucle for para que me muestre solo los equipos:");
for (var i = 0; i < equipo.length; i++) {
    console.log("Equipo: " + equipo[i][0]);
}

// Bucle for para que me muestre solo los jugadores
console.log("Bucle for para que me muestre solo los jugadores:");
for (var i = 0; i < equipo.length; i++) {
    console.log("Jugador: " + equipo[i][1]);
}

// Bucle for para que me muestren todos los equipos con los jugadores:
console.log("Bucle for para que me muestren todos los equipos con los jugadores:");
for (var i = 0; i < equipo.length; i++) {
    console.log("Equipo: " + equipo[i][0] + ", Jugador: " + equipo[i][1]);
}


/* HECHO EN E7.1 mejor

/* Una función traspaso, que muestre un índice del equipo que tiene X jugador 
y luego que se muestre el traspaso de un equipo a otro.

Que elimine un jugador y luego al recorrer con un for, 
que compruebe que ese jugador ya no está en ese equipo.

1 Busque un jugador dado en el arreglo equipo y muestre su índice en el arreglo.
2 Realice el traspaso de un jugador de un equipo a otro.
3 Elimine un jugador del equipo original.
4 Compruebe que el jugador eliminado ya no esté en el equipo original.
*

/
var equipo = [
    ["Girona", "Pepe"],
    ["Madrid", "Vinicius"],
    ["Athletic", "Mbappé"],
    ["Barcelona", "Messi"],
    ["Athlético de Madrid", "Griezman"]
];
*


function traspaso(jugador, equipoOrigen, equipoDestino) {
    // Paso 1: Buscar el índice del jugador en el equipo original
    var indiceJugador = -1;
    for (var i = 0; i < equipo.length; i++) {
        if (equipo[i][1] === jugador && equipo[i][0] === equipoOrigen) {
            indiceJugador = i;
            break;
        }
    }

    if (indiceJugador === -1) {
        console.log("El jugador no se encontró en el equipo original.");
        return;
    }

    // Paso 2: Realizar el traspaso al equipo destino
    equipo[indiceJugador][0] = equipoDestino;

    // Paso 3: Eliminar al jugador del equipo original
    equipo.splice(indiceJugador, 1);

    // Paso 4: Comprobar que el jugador no esté en el equipo original
    for (var i = 0; i < equipo.length; i++) {
        if (equipo[i][1] === jugador && equipo[i][0] === equipoOrigen) {
            console.log("Error: El jugador sigue estando en el equipo original después del traspaso.");
            return;
        }
    }

    console.log("Traspaso exitoso: " + jugador + " fue traspasado de " + equipoOrigen + " a " + equipoDestino);
}

// Ejemplos para hacer los traspasos:
console.log("Antes del traspaso:");
console.log(equipo);

traspaso("Messi", "Barcelona", "PSG");

console.log("Después del traspaso:");
console.log(equipo);
*/
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Resultados</title>

    <!-- Metido bootstrap para hacerlo más vistoso -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>
        /* Estilos para ocultar los campos de texto después de escribir */
        /* input:placeholder-shown {
            visibility: visible;
        }

        input::placeholder {
            visibility: hidden;
        } */
    </style>
</head>
<body>

    <h2>Formulario de Resultados</h2>

    <!-- Así creado normal:
        <form id="resultForm">
        <label for="team1Name">Nombre equipo 1:</label>
        <input type="text" id="team1Name" placeholder="Nombre equipo 1">

        <label for="team1Points">Puntos equipo 1:</label>
        <input type="number" id="team1Points" placeholder="Puntos equipo 1">

        <label for="team2Name">Nombre equipo 2:</label>
        <input type="text" id="team2Name" placeholder="Nombre equipo 2">

        <label for="team2Points">Puntos equipo 2:</label>
        <input type="number" id="team2Points" placeholder="Puntos equipo 2">

        <button type="button" onclick="calcularGanador()">Calcular Ganador</button>
    </form> -->

    <!-- Así creado como lo pide el profesor en el ejercicio, lo más parecido posible -->
    <!-- Solo quiere el Nombre equipo 1 dentro del campo vacío y que se elimine conforme escribes -->
    <form id="resultForm">
        <label for="team1Name"></label>
        <input type="text" id="team1Name" placeholder="Nombre equipo 1">
        <br>
        <br>
        <label for="team1Points"></label>
        <input type="number" id="team1Points" placeholder="Puntos del equipo 1">
        <br>
        <br>
        <label for="team2Name"></label>
        <input type="text" id="team2Name" placeholder="Nombre equipo 2">
        <br>
        <br>
        <label for="team2Points"></label>
        <input type="number" id="team2Points" placeholder="Puntos del equipo 2">
        <br>
        <br>
        <button type="button" onclick="calcularGanador()" class="btn btn-primary" >Submit</button>
    </form>

    <div id="resultMessage" style="display: none;">
        <p id="winnerMessage"></p>
    </div>

    <script>
        function calcularGanador() {
            // Obtener valores de los campos
            var team1Name = document.getElementById('team1Name').value;
            var team1Points = parseInt(document.getElementById('team1Points').value) || 0;
            var team2Name = document.getElementById('team2Name').value;
            var team2Points = parseInt(document.getElementById('team2Points').value) || 0;

            // Calcular la diferencia de puntos
            var pointsDifference = Math.abs(team1Points - team2Points);

            // Determinar al ganador
            var winner = team1Points > team2Points ? team1Name : (team2Points > team1Points ? team2Name : "Empate");

            // Mostrar el mensaje
            var resultMessage = document.getElementById('resultMessage');
            var winnerMessage = document.getElementById('winnerMessage');
            winnerMessage.textContent = "El ganador ha sido el " + winner + ". La diferencia de puntos ha sido " + pointsDifference;
            resultMessage.style.display = 'block';
        }
    </script>

<!-- El script de bootstrap:  -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>

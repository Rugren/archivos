<body style='background-image:url(img/pista.jpg9; background-repeat: no-repeat;'>
<?php
    $jugadores = ["Chacho" => "1", "Navarro" => "2", "Gasol" => "3", "Rudy" => "4", "Garbajosa" => "5"];
    echo "<h1> Selección Española de Baloncesto </h1>";
    echo "<div style='position:absolute; width: 700px; top-margin: 500px; left-padding:200px;'>";
    foreach($jugadores as $nombre=>$numCamiseta){
        echo "<div style='width: 200px; float: left;'>";
        echo "<a href='jugador.php?nombre=$nombre'>";
        echo "<img src='img/$nombre.jpg' style='height: 100px;'>";
        echo "</a>";
        echo "<h2>$nombre</h2>";
        echo "<h3>$numCamiseta</h3>";
        echo "</div>";
    }
    echo "</div>";

?>
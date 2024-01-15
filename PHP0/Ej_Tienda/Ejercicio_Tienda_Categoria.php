<?php
    $productos = ["ordenador"=>525, "impresora"=>110, "windows10" => "200"];
    $categorias=["ordenador"=>"Hw", "impresora"=>"Hw", "windows10" => "Sw"];
    $cat=$_GET["cat"];
    // $categorias=$_GET["cat"];
    echo "<h1>$cat</h1>";
    foreach($productos as $nombre=>$precio){ // copiado el foreach de Ejercicio_Tienda, pero hemos añadido el if.
        $categoria=$categorias[$nombre];
        if($cat == $categoria){ 
        echo "<div style='width: 200px; float:left'>"; // para que flote hacia la izquierda y salgan los 2 juntos: float:left
        echo "<img src='img/$nombre.jpg' style='height:100px'>"; // sustituido el: style='width:200px'>";
        echo "<h2>$nombre</h2>";
        echo "<h3>$precio €</h3>";
        echo "<a href='Ejercicio_Tienda_Detalle.php?producto=$nombre'> Ver <a>";
        echo "<h6><a href='Ejercicio_Tienda_Categoria.php?cat=$categoria'>$categoria</a></h6>"; //Antes:  echo "<h6>" . $categorias[$nombre] . "</h6>"; // concatenamos con el punto la categoría con el nombre.
        echo "</div>";
        }
    }

    
    ?>
<?php
    $variedad["cafe_grano"]=["solo", "corto", "largo"];
 // $variedad["cafe_grano" => ["solo", "corto", largo"]]; // también se puede hacer de esta manera.
    $imagen["cafe_grano"]=["solo.jpg", "corto.jpg", "largo.jpg"];

    $variedad["cafe_soluble"]=["Café solo", "Café con leche"];
    $imagen["cafe_soluble"]=["solo.jpg", "conleche.jpg"];
    
    $variedad["infusiones"]=["te", "ayahuasca", "manzanilla"];
    $imagen["infusiones"]=["te.jpg", "ayahuasca.jpg", "manzanilla.jpg"];

    $variedad["cafe_capuchino"]=["solo", "con leche", "belmonte"];
    $imagen["cafe_capuchino"]=["solo.jpg", "conleche.jpg", "belmonte.jpg"];

    $variedad["sinvaso"]=["derramado"];
    $imagen["sinvaso"]=["derramado.jpg"];

    $tipo=$_GET["tipo"];

    for($i=0; $i<sizeof($variedad[$tipo]); $i++){
      $aux=$variedad[$tipo][$i]; // creamos la variable aux (auxiliar) para cogerla y que no tengamos que escribir todo el rato lo mismo.
      $img=$imagen[$tipo][$i];
      echo "<div>";
      echo "<a href='cafe3.php?tipo=$tipo&variedad=$aux'>"; // en el cafe3.php pide el azucar y en cafe4.php que salga texto Producto comprado.
      echo "<h2>$aux</h2>";
      echo "<img src='img/$img' style='width: 200px; height:150px;' >";
      echo "</a></div>";
    }

    /* for($i=0; $i<sizeof($variedad[$tipo]); $i++){
      echo "<div>";
      echo "<a href='cafe3.php?tipo=$tipo&variedad=$variedad[$tipo][$i]'>";
      echo "<h2>$variedad[$tipo][$i]</h2>";
      echo "<img src='img/$imagen[$tipo][$i]'>";
      echo "</a></div>";
    } */

        /* Así heccho con el foreach pero no va bien (no coge las infusiones):
    // con un foreach es mejor para el código, más corto de escribir y entender:
    foreach($variedad[$tipo] as $v){ // v es valor.
      echo "<div>";
      echo "<a href='cafe3.php?tipo=$tipo&variedad=$v'>";
      echo "<h2>$v</h2>";
      echo "<img src='img/$v.jpg'>";
      echo "</a></div>";
    }
    */



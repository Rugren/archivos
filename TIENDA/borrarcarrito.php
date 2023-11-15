<?php

/* este sería para borrar o vaciar carrito */

    session_start();
    $_SESSION["listaproductos"]=serialize([]);
    header("location: vercarrito.php");
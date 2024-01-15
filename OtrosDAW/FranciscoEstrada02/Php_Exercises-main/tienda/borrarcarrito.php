<?php
session_start();

$_SESSION["carrito"] = [];

header("location: carrito.php");
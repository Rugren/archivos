<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- Está en página 50 del aprendephpconejercicios.pdf : 6.1 Implementando funciones para reutilizar código -->

<?php
$n = $_POST['n']; // no es un error, es un warning.
if (!isset($n)) {
?>

Introduzca un número para saber si es primo o no.<br>
<form action="num_primo.php" method="post">
<input type="number" name="n" min="0" autofocus><br>
<input type="submit" value="Aceptar">
</form>
<?php
} else {
$esPrimo = true;
for ($i = 2; $i < $n; $i++) {
if ($n % $i == 0) {
$esPrimo = false;
}
}
// El 0 y el 1 no se consideran primos
if (($n == 0) || ($n == 1)) {
$esPrimo = false;
}
if ($esPrimo) {
echo "El $n es primo.";
} else {
echo "El $n no es primo.";
}
}
?>
</body>
</html>
<form action="formulariotodos.php" method="post">
    <input type="text" name="texto1">
    <input type="submit" value="enviar" name="enviar"">
</form>


<?php
$text1 = $_POST['texto1'];
$todosArray = [];

for($i = 0; $i < 10; $i++){
    $todosArray[$i] = $text1;
}

echo "$todosArray";









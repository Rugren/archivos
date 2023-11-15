<form action="" method="POST">
    <input type="number" name="n1">
    <input type="number" name="n2">
    <input type="number" name="n3">
    <input type="number" name="n4">
    <input type="number" name="n5">
    <input type="submit" value="Enviar">
</form>

<?php
    if(isset($_POST["n1"])){
        $positivos=0;
        $negativos=0;
        for($n=1; $n<=5; $n++) {
            if($_POST["n" . $n ] > 0){
                $positivos++;
            }
            if($_POST["n" . $n ] > 0){
                $negativos++;
        }
    }

    echo "Hay $positivos positivos y $negativos negativos";
}

<form action="" method="POST">
    <input type="number" name="numero">
    <input type="submit" value="Enviar">
</form>

<?php
    if(isset($_POST["numero"])){
        $numero=$_POST["numero"];

    $n1=0;
    $n2=1;
    // echo "0, 1, ";
    for($n=0; $n<$numero-2; $n++){
        $fibo = $n1 + $n2;
        // echo "$fibo, ";
        $n1=$n2;
        $n2=$fibo;
    }
    echo $fibo;
}
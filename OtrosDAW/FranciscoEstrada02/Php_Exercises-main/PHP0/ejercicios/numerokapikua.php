<form action="numerokapikua.php" method="post">
    <input type="number" name="numero1">
    <input type="submit" value="enviar" name="enviar"">
</form>

<?php 
    
    if(isset($_POST["enviar"])){

        $numero1 = $_POST["numero1"];
        
        if(strlen($numero1) == 1){
            echo "Es capicua";
        }else if(strlen($numero1) == 2 && (substr($numero1,0,1) == substr($numero1,-1,1))){
            echo "Es capicua";
        }else if(strlen($numero1) == 3 && (substr($numero1,0,1) == substr($numero1,-1,1))){
            echo "Es capicua";
        }else if(strlen($numero1) == 4 && (substr($numero1,0,2) == substr($numero1,-2,2))){
            echo "Es capicua";
        }else if(strlen($numero1) == 5 && (substr($numero1,0,2) == substr($numero1,-2,2))){
            echo "Es capicua";
        }else{
            echo "No es capicua";
        }
        
    }
?>
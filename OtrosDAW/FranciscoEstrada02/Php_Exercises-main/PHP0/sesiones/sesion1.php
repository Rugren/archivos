<?php
    session_start();

    echo "<form action= '' method='POST'>";
    echo "<input type='number' name='numero'>";
    echo "<input type='submit' value='submit'>";
    echo "</form>";

    $_SESSION["secreto"] = 7;
    

    if(isset($_POST["numero"])){
        $n = $_POST["numero"];

        if($_SESSION["secreto"] != $n){
            $_SESSION["intentos"]--;
            echo "<br> Has fallado";
            if($_SESSION["intentos"] == 0){
                echo "<br>Ya no te quedan intentos";
            }
        }else{
            echo "<br> Has acertado";
        }
    }else{
        $_SESSION["intentos"] = 3;
    }

    ?>
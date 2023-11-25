<html>
    <head>
        <title>Esta es mi web</title>
    </head>
    
    <body>
        <?php

            echo "Hola mundo! <br>";

            $a = 8;
            $b = 3;

            echo $a + $b, "<br>";
            echo $a - $b, "<br>";
            echo $a * $b, "<br>";
            echo $a / $b, "<br>";
            
            $a++;
            echo $a, "<br>";
            
            $b++;
            echo $b, "<br>";
            

            echo "<img src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQfROR2kse0V61MnyK7CmFXjLbCnNr9UvMzgA&usqp=CAU'>";

            echo "<table>
                <tr>
                    <td>Francisco</td>
                    <td>Javier</td>
                </tr>
                <tr>
                    <td>Estrada</td>
                    <td>Cuenca</td>
                </tr>
            </table>";

            $euros = 25;

            $pesetas = $euros*166.386;

            echo "$euros euros son $pesetas pesetas";
        ?>
    </body>
</html>



<?php

$a = [8,2,11,1];
$suma = 0;

for($i = 0; $i < sizeof($a); $i++){
    $suma +=  $a[$i];
}

$media = $suma / sizeof($a);

echo $media;


?>

<?php

echo "FUNÇÕES NO PHP ! <br><br> ";

function hello($name, $last_name){
    echo "Hello $name $last_name <br><br>";
}

hello("Ruan", "Carlos");
echo "=============================================================== <br><br>";


function somar_valores(int $x, int $y){
    return $x + $y;
    
}

echo somar_valores(5,"5 Anos");


?>


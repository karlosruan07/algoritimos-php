
<?php

echo "Constantes no PHP <br><br>";

define("nome", "Ruan");
echo nome . "<br><br>";

define("SOBRENOME", "Tavares");
echo SOBRENOME;
echo "<br><br>";

define("cars",[
    "Onix",
    "Argo",
    "Mobi"
]);
echo cars[1];
echo "<br><br>";


define("idade", 23);

function myAge(){
    echo "My Age is " . idade;
    
}

myAge();


?>






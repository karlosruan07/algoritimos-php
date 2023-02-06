
<?php

echo "Escopos de variáveis";
echo "<br>";

$nome = "Ruan";

function teste(){
    echo "<p>Eu me chamo $nome ! </p>";//não imprime o nome pois a variável está não está no escopo local da função.
}
teste();
echo "<br>";


function teste2(){
    $sobrenome = "Carlos";
    echo "Meu sobrenome é $sobrenome ! ";
}
teste2();
echo $sobrenome;//Dá um erro/não imprime pois a variável é local.
echo "<br>";


$valor1 = 1;
$valor2 = 1;

function teste3() {
    global $valor1;
    echo $valor1;
}
teste3();
echo "<br>";


$x = 10;
$y = 10;

function teste4(){
    //$GLOBALS['x'];
    echo $GLOBALS["x"];
    echo "<br>";
    echo $x;
}
teste4();
echo "<br>";


function teste5(){
    static $z = 0;
    echo $z;
    $z ++;
}


teste5();
teste5();
teste5();


?>
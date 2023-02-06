
<?php

/*
Faça um algoritmo PHP que receba os valores A e B, imprima-os em ordem
crescente em relação aos seus valores. Exemplo, para A=5, B=4. Você
deve imprimir na tela: "4 5".
*/

echo "ORDEM CRESCENTE !! <br><br>";

$valor1 = 200; $valor2 = 100;
$maior = null;

if($valor1 < $valor2){
    echo $valor1 . " ";
    echo $valor2 . " ";
}else{
    echo $valor2 . " ";
    echo $valor1 . " ";
}

?>


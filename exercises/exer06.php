
<?php

/*
Crie um algoritmo para calcular a média final de um aluno, para isso,
solicite a entrada de três notas e as insira em um array, por fim,
calcule a média geral. Caso a média seja maior ou igual a seis, exiba
aprovado, caso contrário, exiba reprovado. Exiba também a média final
calculada.
Ex: N1 = 5 | N2 = 10 | N3 = 4 | MG = 6,33 [Aprovado]
*/

echo "<h3>MÉDIA DE NOTAS !</h3>";

$notas = array(5,10,4);
$somatorio = 0;

for($x=0; $x <= count($notas); $x++){
    $somatorio += $notas[$x];
}

$media = $somatorio / count($notas);

echo "Sua média é ". $media . " e você está ";

if ($media < 6){
    echo "REPROVADO !";
}elseif($media >= 6){
    echo "APROVADO !";
}

?>


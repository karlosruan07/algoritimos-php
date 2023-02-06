
<?php

echo "<h4>NÚMERO COM O MÊS CORRESPONDENTE !</h4>";

/*
Ler um número inteiro entre 1 e 12 e escrever o mês correspondente.
Caso o número seja fora desse intervalo, informar que não existe mês
com este número.
*/

$numMes = 1;
$mês = [
    'JANEIRO',
    'FEVEREIRO',
    'MARÇO',
    'ABRIL',
    'MAIO',
    'JUNHO',
    'JULHO',
    'AGOSTO',
    'SETEMBRO',
    'OUTUBRO',
    'NOVEMBRO',
    'DEZEMBRO'
];

$posMes = $numMes - 1;

if($posMes >= 0 and $posMes <= 11){
    echo $mês[$posMes];
}else{
    echo "Opção inválida !";
}


?>


<?php

echo "Condições no PHP ! <br><br>";

$idade = 18;

if ($idade >= 18){
    echo "Você é maior de idade <br><br>";
} else{
    echo "Você é menor de idade <br><br>";
}



if ($idade < 0){
    echo "Idade digitada Inválida <br><br>";
} elseif ($idade > 0 and $idade < 18){
    echo "Você é menor de idade ! <br><br>";
} else{
    echo "Você é maior de idade ! <br><br>";
}

?>



<?php

echo "Estrutura de controle <b>SWITCH</b>. <br><br> ";

$nome = "Reis";

switch($nome){
    case "Ruan":
        echo "Olá Ruan";
        break;

    case "Carlos":
        echo "Olá Carlos";
        break;

    case "Tavares":
        echo "Olá Tavares";
        break;

    case "Reis":
        echo "Olá Reis";
        break;

    default:
        echo "NOME DESCONHECIDO !";
}

?>




<?php

echo "Estrutura de Repetição <b>WHILE </b> ! <br><br>";

$x = 0;
while($x <= 10){
    echo $x . "<br>" ;
    $x++;
}

echo "========================================================== <br>";

$y = 0;

do{
    echo $y . "<br>";
    $y++;

}while($y <= 10);

echo "========================================================== <br>";


for($z=0; $z<=10; $z++){
    echo $z . "<br>";
}


$city = array("santarém", "Belém", "São paulo", "Rio de Janeiro");
foreach($city as $value){
    echo $value . "<br>";
}

echo "========================================================== <br>";


$city_state = [
    "Santarém" => "PA",
    "Itu" => "SP",
    "Manaus" => "AM"
];

foreach($city_state as $city => $state){
    echo "$city => $state " . "<br>";
}


?>




<?php

echo "Números no PHP ! <br>";


echo PHP_INT_MAX . "<br>";
echo PHP_INT_MIN . "<br>";
echo PHP_INT_SIZE . "<br>";

var_dump(is_int(10));
echo "<br>";

var_dump(is_integer(20));
echo "<br>";

var_dump(is_long(30));
echo "<br>";
echo "<br>";
echo "<br>";

$x = 1234.5;
echo $x . "<br>";
$int_cast = (int)$x;
echo $int_cast . "<br>";
echo "<br>";

$y = "123456";
var_dump($y);
echo "<br>";
var_dump(is_numeric($y));//retorna True pois é uma string numérica;



?>




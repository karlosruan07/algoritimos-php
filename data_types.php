
<?php

print "Tipos de dados no PHP !<br><br>";

$nome = "Ruan";
$sobrenome = "Carlos<br><br>";
print($nome . $sobrenome);


$valor1 = 10;
var_dump($valor1);
print "<br><br>";
var_dump($nome);

print "<br><br>";


$peso = 70.1;
var_dump($peso);
print "<br><br>";

$casado = false;
var_dump($casado);
print "<br><br>";

$MeuNome = array("Ruan", "Carlos", "tavares", "reis");
$MaisInfo = [23, "santarém", "pará"];
var_dump($MeuNome);
print "<br><br>";
var_dump($MaisInfo);
print "<br><br>";


class Car{
    public $color;
    public $model;

    public function __construct($color, $model){
        $this->color = $color;
        $this->model = $model;
    }
    public function message(){
        return "My car is a " . $this->color . $this->model . "!";
    }
}

$myCar = new Car("black", " red");
print $myCar->message();
echo "<br>";


class Aluno{
    public $nome;
    public $sobrenome;

    public function __construct($nome, $sobrenome){
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
    }

    public function criar_aluno(){
        return "O aluno " .$this->nome. " com o sobrenome " .$this->sobrenome. " foi criado !";
    }

}

$novo_aluno = new Aluno("Ruan", "Carlos");
echo $novo_aluno->criar_aluno();

echo "<br><br>";

$x = 10;
$x = null;
var_dump($x);



class Client{
    public function create_client(string $name, string $last_name ){
        echo "<br><br>" . $name . "<br><br>" . $last_name;
    }
}

$newClient = new Client;
echo $newClient->create_client("Ruan", "Carlos");

?>



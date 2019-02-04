<?php
//dados escalares
//string
//$nome = "String é uma sequencia de caracteres";
//$nome = 123;
$nome = "123";
var_dump($nome);

if(is_string($nome)):
	echo "É uma string";
else:
	echo "Não é uma string";
endif;
echo "<hr>";

//tipo de dado int

$idade = 25;
var_dump($idade);
if(is_int($idade)):
	echo "É um int";
else:
	echo "Não é um int";
endif;
echo "<hr>";

//tipo de dado float

$altura = 1.82;
var_dump($altura);
if(is_float($altura)):
	echo "É um float";
else:
	echo "Não é um float";
endif;
echo "<hr>";

//tipo de dado boolean

$admin = true;
var_dump($admin);
if(is_bool($admin)):
	echo "É um boleano";
else:
	echo "Não é um boleano";
endif;
echo "<hr>";

//array composto
$carros = array("Gol", "Uno", "Camaro", 12, true);
var_dump($carros);

//objeto
class Cliente{
	public $nome;
	public function atribuirNome($nome){
		$this->$nome = $nome;
	}
}

echo "<hr>";
$cliente = new Cliente();
$cliente->atribuirNome("Fabricio");
var_dump($cliente);

if(is_object($cliente)):
	echo "É um objeto";
else:
	echo "Não é um objeto";
endif;
echo "<hr>";
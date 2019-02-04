<?php
//constantes

//só pode ser definida apenas uma vez
define("NOME", "Fabricio");
define("IDADE", 25);
define("ALTURA", 1.82);

echo 'Meu nome é '. NOME . ' e minha idade é ' . IDADE . ' e minha altura é ' . ALTURA;

define("TIMES" , ['vasco', 'flamengo', 'barcelona']);
echo "<hr>";

echo TIMES[1];

echo "<hr>";

function exibeCoisas(){
	echo NOME;
	echo "<br>";
	echo TIMES[0];
}

exibeCoisas();
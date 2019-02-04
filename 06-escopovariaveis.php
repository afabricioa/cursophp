<?php

//escopo global
$nome = "Rodrigo Oliveira";
$a = 1;
$b = 5;
$c = 7;

function exibeNome(){
	//definindo escopo global: 
	global $nome;
	echo $nome;
}

exibeNome();
echo "<hr>";

function exibeCidade(){
	//escopo local
	global $cidade;
	$cidade = "Teresina";
}

echo $cidade;
echo "<hr>";

function soma(){
	echo $GLOBALS['a'] + $GLOBALS['b'] + $GLOBALS['c'];
	
	//echo $a + $b + $c;
}

soma();
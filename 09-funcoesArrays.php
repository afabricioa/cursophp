<?php

$carros = array("BMW", "Focus", "Cronus");

echo is_array($carros); //1 para array, 2 para falso

//-----------------------------------------
echo "<hr>";
echo in_array("BMW", $carros); //verifica se tem o valor no array

//-----------------------------------------
echo "<hr>";
$carros2 = array("BMW"=>"M3","Ford"=>"Focus", "Fiat"=>"Cronus");
$chaves = array_keys($carros);
print_r($chaves);

//----------------------------------------
echo "<hr>";
$nomes = array("Namorada"=>"Nelma", "Amiga"=>"Manu", "Outra amiga"=>"Tais");

$values = array_values($nomes);
print_r($values);
//----------------------------------------
echo "<hr>";
$motos = array("Suzuki", "Pop100", "Cinquentinha");

$veiculos = array_merge($carros, $motos);
print_r($veiculos);
//----------------------------------------
echo "<hr>";
print_r($carros);
array_pop($carros);
echo "<br>";
print_r($carros);

//array_shift - exclui a primeira posição do array
//----------------------------------------
echo "<hr>";
$frutas = array("uva", "banana", "manga");
print_r($frutas);
echo "<br>";
array_unshift($frutas, "melancia", "maça");
print_r($frutas);
//array_push - adiciona um ou mais valores no final do array
//----------------------------------------
//combina os dois valores
echo "<hr>";
$chaves = array("Campeão", "Vice", "Terceiro");
$valores = array("Barcelona", "Flamengo", "Real");

$times = array_combine($chaves, $valores);
print_r($times);
//----------------------------------------
echo "<hr>";
$soma = array(5,6,10,8);
echo array_sum($soma);
//----------------------------------------
echo "<hr>";
//transforma uma string em um array

$data = "30/02/2018";
$novaData = explode('/', $data);
print_r($novaData);
echo "<br>";

$frase = "Eu amo a Nelma Layelle";
$novaFrase = explode(' ', $frase);
print_r($novaFrase);
//----------------------------------------
echo "<hr>";
//implode transforma um array em uma string

$nomes2 = array("Antonio", "Fabricio", "Almeida", "e", "Silva");

$nomeString = implode(' ', $nomes2);

print_r($nomeString);

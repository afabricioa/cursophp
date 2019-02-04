<?php

/*
	condicionais
	if
	else
	elseif
*/

echo "If/Elsif/Else";
echo "<br>";
$numero = 8;

if($numero == 10):
	echo "É igual a 10";
elseif($numero <= 10):
	echo "Numero é menor ou igual a 9";
//else:
//	echo "É diferente de 10";
endif;
//----------------------------------------
echo "<hr>";
$media = 6;

echo ($media >= 7) ? "Aprovado!" : "Reprovado!";

//----------------------------------------
echo "<hr>";
echo "Switch";
echo "<br>";

$cor = "verde";

switch ($cor) {
	case 'vermelho':
		echo "Sua cor preferida é vermelho";
		break;
	
	case 'azul':
		echo "Sua cor preferida é azul";
		break;
	default:
		echo "Não tem cor preferida"; 
		break;
}

//----------------------------------------
echo "<hr>";
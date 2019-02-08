<?php
//expressões regulares
//define um padrão a ser usado para procurar ou
//substituir palavras ou grupos de palavras
//^ inicio da expressão
//$ final da expressão
//- /i - case sensitive
//[] conjunto de caracteres
//{} ocorrencias - ?{0,1} *{0,} +{1,}
// /^[a-z0-9.\-\_]+@[a-z0-9-\_]+\.(com|br|com.br|net)$/
// /^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$/

$string = "21cs";
$padrao = "/^[a-z0-9]*$/i"; //valida que o inicio da expressão é com 'a'
//{1,} valida de 1 até x ocorrencias
// '?' aceita 0 ou 1 ocorrencias
// '*' valida 0 ou mais
// '+' valida 1 ou mais

$email = "fabricio.a.s@hotmail.x";
$padraoEmail = "/^[a-z0-9.\-\_]+@[a-z0-9.\-\_]+\.(com|br|com.br)$/";
if(preg_match($padraoEmail, $email)):
  echo "Válido";
  echo "<hr>";
  echo $email;
else:
  echo "Inválido";
  echo "<hr>";
endif;

$data = "31/02/1993";
$padraoData = "/^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$/";
if(preg_match($padraoData, $data)):
  echo "Válido";
  echo "<br>";
  echo $data;
else:
  echo "Inválido";
  echo "<hr>";
endif;

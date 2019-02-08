<?php

//Manipulação de arquivos com PHP
/*
  fopen()
  fclose()
  fwrite()
  !feof()
  fgets()
  filesize()
*/

$arquivo = 'arquivo.txt';
$conteudo = "Conteudo de teste\r\n";
//$arquivoAberto = fopen($arquivo, 'a');
$arquivoAberto = fopen($arquivo, 'r');
//fwrite($arquivoAberto, $conteudo);

$tamanhoArquivo = filesize($arquivo);

while(!feof($arquivoAberto)):
  $linha = fgets($arquivoAberto, $tamanhoArquivo);
  echo $linha."<br>";
endwhile;

fclose($arquivoAberto);

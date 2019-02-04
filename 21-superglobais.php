<?php
//Superglobais

/*
	$GLOBALS - armazena toda as variaveis globais em um array
	$_SERVER - contem informações sorbre cabeçalhos, caminhos e scripts
	$_REQUEST - 
	$_POST
	$_GET
	$_FILES
	$_ENV
	$_COOKIE
	$_SESSION
*/

echo "Super Globais <br>";
echo "$GLOBALS <br>";

$x = 10;
$y = 15;

function soma(){
	echo $GLOBALS['x'] + $GLOBALS['y'];
}

soma();

echo "<hr>";

echo "REQUEST <br>";

echo $_SERVER['PHP_SELF']. "<br>"; //retorna o nome do arquivo do scipt
echo $_SERVER['SERVER_NAME']. "<br>"; //retorna o nome do host do servidor
echo $_SERVER['SCRIPT_FILENAME']. "<br>"; //retorna o caminho absoluto do script
echo $_SERVER['DOCUMENT_ROOT']. "<br>"; //retorna o diretorio raiz do script
echo $_SERVER['SERVER_PORT']. "<br>"; //retorna a porta do servidor
echo $_SERVER['REMOTE_ADDR']. "<br>"; //endereço ip de onde tá visualizando a pagina
echo "Outros indices na documentação do PHP: http://php.net/manual/pt_BR/reserved.variables.server.php";
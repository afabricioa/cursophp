<?php
// conexão com o banco de dados
$servername = "127.0.0.1";
$username = "root";
$password = "xaxaxdlol12";
$db_name ="sistemalogin";

$connect = mysqli_connect($servername, $username, $password, $db_name);

if(mysqli_connect_error()):
  echo "Falha na conexão: ".mysqli_connect_error();
endif;

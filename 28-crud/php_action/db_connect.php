<?php
// conexão com o banco de dados
$servername = "127.0.0.1";
$username = "root";
$password = "xaxaxdlol12";
$db_name ="crudphp";

$connect = mysqli_connect($servername, $username, $password, $db_name);
//mysqli_set_charset($connect, "uft-8");

if(mysqli_connect_error()):
  echo "Falha na conexão: ".mysqli_connect_error();
endif;

<?php

/*
$nome = $_POST['nome'];
$email = $_POST['email'];

echo "Seu nome é $nome e seu email é $email. <br>";

var_dump($_POST);
*/

$nome = $_GET['nome'];
$email = $_GET['email'];

echo "Seu nome é $nome e seu email é $email. <br>";

echo "Sua idade é " . $_GET['idade'] . "<br>";

var_dump($_GET);
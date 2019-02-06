<?php

$senha = "123456";

$novasenha = base64_encode($senha);
echo "base64: ".$novasenha."<br>";
echo "Sua senha é: ". base64_decode($novasenha);

echo "<hr>";

echo "MD5: ".md5($senha);
echo "<br>";
echo "Sha1: ". sha1($senha);

echo "<hr>";

$options = [
  'cost' => 10;
];
$senhaSegura = password_hash($senha, PASSWORD_DEFAULT, $options);

echo $senhaSegura;

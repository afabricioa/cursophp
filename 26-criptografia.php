<?php

$senha = "123456";

$novasenha = base64_encode($senha);
echo "base64: ".$novasenha."<br>";
echo "Sua senha é: ". base64_decode($novasenha);

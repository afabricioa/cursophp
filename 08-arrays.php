<?php
//arrays

//posso definir os indices
// array(1=>"BMW", 2=>"Focus", 3=>"Cronus");
$carros = array("BMW", "Focus", "Cronus");
//echo não imprime array, tem que usar print_r

$carros[] = "Amarok"; //ele adiciona no array sem especificar indice
$carros[10] = "Argo";
print_r($carros);

echo "<hr>";

echo $carros[0];
echo "<hr>";

$motos = array();
$motos[] = "Yamaha";
$motos[] = "Honda";
$motos[5] = "Suzuki";

print_r($motos);
echo "<hr>";

//count
echo count($carros);
echo "<br>";
$totalMotos = count($motos);
echo $totalMotos;
echo "<hr>";

foreach ($carros as $i => $value) {
	echo $carros[$i] . "<br>";
}

//arrays associativos
$pessoa = array("nome" => "Fabricio", "idade" => 25, "altura" => 1.82);

echo $pessoa["nome"];
echo "<br>";
echo $pessoa["idade"];
echo "<br>";
echo $pessoa["altura"];
echo "<hr>";

foreach ($pessoa as $i => $valor) {
	echo $i. ": " . $valor . "<br>";
}

//array multidimensionais
$times = array("cariocas"=> array("campeao"=>"vasco", "vice"=>"flamengo", "terceiro"=>"botafogo"),
				"paulistas"=> array("SP", "santos", "corinthians"));
echo "<hr>";
echo "<br>";
echo $times["cariocas"][0];
echo "<br>";
foreach ($times["cariocas"] as $i => $valor) {
	echo $i. ": " . $valor . "<br>"; 
}
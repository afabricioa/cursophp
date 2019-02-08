<?php
//datas
echo "dia: ".date('d');
echo "<br>";
echo "Dia: ".date('D');
echo "<br>";
echo "mes: ".date('m');
echo "<br>";
echo "Mes: ".date('M');
echo "<br>";
echo "ano: ".date('y');
echo "<br>";
echo "Ano: ".date('Y');
echo "<hr>";
echo "dia da semana l:  ".date('l');
echo "<br>";
echo "data d/m/y: ".date('d/m/y');
echo "<br>";
echo "hora: ".date('h');
echo "<br>";
echo "Hora: ".date('H');
echo "<br>";
date_default_timezone_set('America/Fortaleza');
echo "Hora: ".date('H:i:s');
echo "<hr>";
$date = date('Y-m-d');
echo $date;
echo "<br>";
$datetime = date('Y-m-d- H:i:s');
echo $datetime;
echo "<br>";
echo "Quantidade de seg desde 1970: ".time();
echo "<br>";
//echo date('d/m/Y', $time);
echo "<hr>";
$pagamento = mktime(15, 30, 00, 7, 1, 2020);
echo date("d/m/y - H:i", $pagamento);
echo "<hr>";
//strtotime
//coluna date no BD
$data = '2019-02-08';
//coluna datetime no BD
$coldatetime = '2019-02-10 11:15:00'; //ano/mes/dia

$data = strtotime($coldatetime);
echo date('d/m/Y', $data);

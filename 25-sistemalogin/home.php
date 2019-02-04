<?php
//iniciando a sessão
session_start();

//requerindo a conexão com o BD
require_once 'db_connect.php';

//verificação da sessão
if(!isset($_SESSION['logado'])):
  header('Location: index.php');
endif;

//dados
$id = $_SESSION['id_usuario'];
$sql = "SELECT * FROM sistemalogin.usuario WHERE id = '$id'";
$resultado = mysqli_query($connect, $sql);
$dados = mysqli_fetch_array($resultado);
mysqli_close($connect);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Página Restrita</title>
  </head>
  <body>
    <h1>Página Restrita</h1>
    <h3>Olá, <?php echo $dados['nome']; ?> </h3>
    <a href="logout.php">Sair</a>
  </body>
</html>

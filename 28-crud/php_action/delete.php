<?php
  require_once 'db_connect.php';
  session_start();

  if(isset($_POST['btao-deletar'])):
    /*
    $erros = array();

    $nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
    $sobrenome = filter_input(INPUT_POST, "sobrenome", FILTER_SANITIZE_SPECIAL_CHARS);

    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
    if(!$email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL)):
      $erros[] = "Email inválido";
    endif;

    $idade = filter_input(INPUT_POST, "idade", FILTER_SANITIZE_NUMBER_INT);
    */

    $id = mysqli_escape_string($connect, $_POST['id']);

    $sql = "DELETE FROM crudphp.clientes WHERE id = '$id'";

    if(mysqli_query($connect, $sql)):
      $_SESSION['mensagem'] = "Deletado com sucesso!";
      header('Location: ../index.php');
    else:
      $_SESSION['mensagem'] = "Erro ao deletar!";
      header('Location: ../index.php');
    endif;
  endif;
?>

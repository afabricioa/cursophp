<?php
  require_once 'db_connect.php';
  session_start();

  if(isset($_POST['btao-cadastrar'])):
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

    $nome = mysqli_escape_string($connect, $_POST['nome']);
    $sobrenome = mysqli_escape_string($connect, $_POST['sobrenome']);
    $email = mysqli_escape_string($connect, $_POST['email']);
    $idade = mysqli_escape_string($connect, $_POST['idade']);

    if(empty($nome) or empty($sobrenome) or empty($email) or empty($idade)):
      $_SESSION['mensagem'] = "Todos os campos precisam ser preenchidos";
      header('Location: ../adicionarCliente.php');
    else:
      $sql = "SELECT email FROM crudphp.clientes WHERE email = '$email'";
      $resultado = mysqli_query($connect, $sql);

      if(mysqli_num_rows($resultado) > 0):
        $_SESSION['mensagem'] = "Email já cadastrado!";
        header('Location: ../adicionarCliente.php');
      else:
        $sql = "INSERT INTO crudphp.clientes (`nome`, `sobrenome`,`email`,`idade`)
        VALUES ('$nome', '$sobrenome', '$email', '$idade')";
        $resultado = mysqli_query($connect, $sql);
        $_SESSION['mensagem'] = "Cadastrado com sucesso!";
        header('Location: ../index.php');
      endif;
    endif;

  endif;
?>

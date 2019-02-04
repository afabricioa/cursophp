<?php
  //conexão
  require_once 'db_connect.php';

  //sessão
  session_start();
  //verifica se o botão foi clicado
  if(isset($_POST['btn-entrar'])):
    $erros = array();
    $login = mysqli_escape_string($connect, $_POST['login']);
    $senha = mysqli_escape_string($connect, $_POST['senha']);

    if(empty($login) or empty($senha)):
      $erros[] = "<li>Login/senha precisam ser preenchidos</li>";
    else:
      $sql = "SELECT login FROM sistemalogin.usuario WHERE login = '$login'";
      $resultado = mysqli_query($connect, $sql);

      if(mysqli_num_rows($resultado) > 0):
        $sql = "SELECT * FROM sistemalogin.usuario WHERE login = '$login'
        AND senha = '$senha'";
        $resultado = mysqli_query($connect, $sql);

        if(mysqli_num_rows($resultado) == 1):
          $dados = mysqli_fetch_array($resultado);
          mysqli_close($connect);
          $_SESSION['logado'] = true;
          $_SESSION['id_usuario'] = $dados['id'];
          header('Location: home.php');
          //exit;
        else:
          $erros[] = "<li> Usuário e senha não conferem </li>";
        endif;
      else:
        $erros[] = "<li>Usuário inexistente!</li>";
      endif;
    endif;
  endif;
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
  </head>
  <body>
    <h1>Login</h1>
    <?php
      if(!empty($erros)):
        foreach($erros as $erro):
          echo $erro;
        endforeach;
      endif;
    ?>
    <hr>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
      Login: <input type="text" name="login" value=""><br>
      Senha: <input type="password" name="senha" value=""><br>
      <button type="submit" name="btn-entrar">Login</button>
    </form>
  </body>
</html>

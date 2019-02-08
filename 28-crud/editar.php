<?php
  //conexão
  require_once 'php_action/db_connect.php';

  include_once 'includes/header.php';
  
  if(isset($_GET['id'])):
    $id = mysqli_escape_string($connect, $_GET['id']);
    $sql = "SELECT * FROM crudphp.clientes WHERE id = '$id'";

    $resultado = mysqli_query($connect, $sql);
    $dados = mysqli_fetch_array($resultado);
  endif;
?>

<div class="row">
  <form class="col s12 push-m3" action="php_action/update.php" method="post">
    <h4 class="light">Alterar Cliente</h4>
    <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
    <div class="row">
      <div class="input-field col s6">
        <input id="nome" type="text" name="nome" class="validate" value="<?php echo $dados['nome']; ?>">
        <label for="nome">Nome</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s6">
        <input type="text" id="sobrenome" name="sobrenome" class="validate" value="<?php echo $dados['sobrenome']; ?>">
        <label for="sobrenome">Sobrenome</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s6">
        <input type="email" name="email" id="email" class="validate" value="<?php echo $dados['email']; ?>">
        <label for="email">Email</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s6">
        <input type="number" name="idade" id="idade" class="validate" value="<?php echo $dados['idade']; ?>">
        <label for="idade">Idade</label>
      </div>
    </div>
    <button class="btn waves red lighten-2" type="submit" name="btao-editar">Alterar</button>
    <a href="index.php" class="btn waves green lighten-2">Lista de Clientes</a>
  </form>
</div>

<?php
  include_once 'includes/footer.php';
?>

<?php
  //conexão
  //require_once 'db_connect.php';

  include_once 'includes/mensagem.php';
  session_unset();
  include_once 'includes/header.php';
?>
<div class="row">
  <form class="col s12 push-m3" action="php_action/create.php" method="post">
    <h4 class="light">Cadastrar Cliente</h4>
    <div class="row">
      <div class="input-field col s6">
        <input id="nome" type="text" name="nome" class="validate">
        <label for="nome">Nome</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s6">
        <input type="text" id="sobrenome" name="sobrenome" class="validate">
        <label for="sobrenome">Sobrenome</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s6">
        <input type="email" name="email" id="email" class="validate">
        <label for="email">Email</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s6">
        <input type="number" name="idade" id="idade" class="validate">
        <label for="idade">Idade</label>
      </div>
    </div>
    <button class="btn waves red lighten-2" type="submit" name="btao-cadastrar">Cadastrar</button>
    <a href="index.php" class="btn waves green lighten-2">Lista de Clientes</a>
  </form>
</div>

<?php
  include_once 'includes/footer.php';
?>

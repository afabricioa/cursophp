<?php
  include_once 'includes/header.php';
  require_once 'php_action/db_connect.php';

  include_once 'includes/mensagem.php';
  session_unset();
  $sql = "SELECT * FROM crudphp.clientes";

  $resultado = mysqli_query($connect, $sql);
  $clientes = array();

  if(mysqli_num_rows($resultado) > 0):
    while($row = mysqli_fetch_array($resultado)):
      $clientes[] = $row;
    endwhile;
  endif;
?>
<div class="row">
  <div class="col s12 m6 push-m3">
    <h3 class="light">Clientes</h3>
    <table class="striped">
      <thead>
        <tr>
          <th>Nome: </th>
          <th>Sobrenome: </th>
          <th>Email: </th>
          <th>Idade: </th>
          <th></th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <?php
          if(mysqli_num_rows($resultado) > 0):
          foreach ($clientes as $c) { ?>
            <tr>
             <td><?php echo $c['nome']; ?></td>
             <td><?php echo $c['sobrenome']; ?></td>
             <td><?php echo $c['email']; ?></td>
             <td><?php echo $c['idade']; ?></td>
             <td><a href="editar.php?id=<?php echo $c['id']; ?>" class="btn-floating orange"><i class="material-icons right">edit</i></button></td>

             <td><a href="#modal<?php echo $c['id']; ?>" class="btn-floating red modal-trigger"><i class="material-icons">delete</i></a></td>

             <!-- Modal Structure -->
              <div id="modal<?php echo $c['id']; ?>" class="modal">
                <div class="modal-content">
                  <h4>Deletar</h4>
                  <p>Tem certeza que deseja excluir o cliente, <?php echo $c['email']; ?>?</p>
                </div>
                <div class="modal-footer">
                  <form action="php_action/delete.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $c['id']; ?>">
                    <button type="submit" name="btao-deletar" class="btn red">Sim!</button>
                    <a href="#!" class="modal-close waves-effect waves-green
                    btn-flat">Cancelar</a>
                  </form>
                </div>
              </div>

            </tr>
          <?php
          }
        else: ?>

          <tr>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
          </tr>

          <?php
        endif;
        ?>
      </tbody>
    </table>
    <br>
    <a href="adicionarCliente.php" class="btn">Adicionar Cliente</a>
  </div>
</div>

<?php
  include_once 'includes/footer.php';
?>

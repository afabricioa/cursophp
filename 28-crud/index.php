<?php
  include_once 'includes/header.php';
?>

<div class="row">
  <div class="col s12 m6 push-m3">
    <h3 class="light">Clientes</h3>
    <table class="strip ed">
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
        <tr>
          <td>Antonio</td>
          <td>Fabricio</td>
          <td>fabricio.a.s@hotmail.com</td>
          <td>25</td>
          <td><a href="" class="btn-floating orange"><i class="material-icons">edit</i></a></td>
          <td><a href="" class="btn-floating red"><i class="material-icons">delete</i></a></td>
        </tr>
      </tbody>
    </table>
    <br>
    <a href="#" class="btn">Adicionar Cliente</a>
  </div>
</div>

<?php
  include_once 'includes/footer.php';
?>

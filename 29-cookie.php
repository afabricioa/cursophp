<?php
  //COOKIE
  setcookie('user', 'Rodrigo', time()+3600);
  setcookie('email', 'fabricio.a.s@hotmail.com', time()+3600);
  setcookie('ultimaPesquisa', 'tenis', time()+3600);

  var_dump($_COOKIE);
?>

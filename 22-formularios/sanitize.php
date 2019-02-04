<!DOCTYPE html>
<html>
<body>
<?php
/*
Sanitização
Funções (filter_input - filter_var)
FILTER_SANITIZE_SPECIAL_CHARS
FILTER_SANITIZE_INT
FILTER_SANITIZE_EMAIL
FILTER_SANITIZE_URL
*/


?>

<?php
	//verifica se existe esse indice "enviar-formulario" e se ele foi ativado
	if(isset($_POST['enviar-formulario'])):
		$erros = array();

    //sanitize

    //limpa todos os caracteres que são estruturas html
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);

    //limpa todos os carecteres que não são numeros
    $idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);
		if (!filter_var($idade, FILTER_VALIDATE_INT)):
			$erros[] = "Idade precisa ser um inteiro.";
		endif;

    //limpa todos os carecteres especiais que não fazem parte de email
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)):
			$erros[] = "Email inválido.";
		endif;

    $url = filter_input(INPUT_POST, 'url', FILTER_SANITIZE_URL);
		if (!filter_var($url, FILTER_VALIDATE_URL)):
			$erros[] = "URL inválida.";
		endif;

    if(!empty($erros)):
      foreach ($erros as $i => $value):
        echo "<li> $value </li>";
      endforeach;
    else:
      echo "Parabéns, seus dados estão corretos!";
    endif;
	endif
?>

	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    Nome: <input type="text" name="nome"><br>
    Idade: <input type="text" name="idade"><br>
		Email: <input type="email" name="email"><br>
		Url: <input type="url" name="url"><br>
		<button type="submit" name="enviar-formulario"> Enviar </button><br>

		<a href="dados.php">Enviar dados</a>
	</form>
</body>
</html>

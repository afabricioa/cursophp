<!DOCTYPE html>
<html>
<body>
<?php
/* Validações
Funções (filter_input - filter_var)
FILTER_VALIDATE_INT
FILTER_VALIDATE_EMAIL
FILTER_VALIDATE_FLOAT
FILTER_VALIDATE_IP
FILTER_VALIDATE_URL

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

		if(!$idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT)):
			$erros[] = "Idade precisa ser um inteiro!";
		endif;

		if(!$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)):
			$erros[] = "Email inválido!";
		endif;

		if(!$peso = filter_input(INPUT_POST, 'peso', FILTER_VALIDATE_FLOAT)):
			$erros[] = "Peso precisa ser um float!";
		endif;

		if(!$ip = filter_input(INPUT_POST, 'ip', FILTER_VALIDATE_IP)):
			$erros[] = "IP inválido!";
		endif;

		if(!$url = filter_input(INPUT_POST, 'url', FILTER_VALIDATE_URL)):
			$erros[] = "URL inválido!";
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
		Idade: <input type="text" name="idade"><br>
		Email: <input type="email" name="email"><br>
		Peso: <input type="peso" name="peso"><br>
		Ip: <input type="ip" name="ip"><br>
		Url: <input type="url" name="url"><br>
		<button type="submit" name="enviar-formulario"> Enviar </button><br>

		<a href="dados.php">Enviar dados</a>
	</form>
</body>
</html>

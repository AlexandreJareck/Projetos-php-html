<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<title>Aula 11 - Login</title>


</head>
<body class="container">
	<?php include 'menu.php'; 

	
	if (!empty($_GET['msg']))
	{
		$msg = $_GET['msg'];
		if($msg == 'errorEmpty')
		{
			echo '<div class="alert alert-warning">';
			echo '<h4 class="alert-heading">ATENÇÃO:</h4><hr>'; // hr linha horizontal
			echo '<p>Preencha o formulário abaixo para efetuar o Login!</p></div>';
		}
		else if($msg == 'errorInvalid')
		{
			echo '<div class="alert alert-danger">';
			echo '<h4 class="alert-heading">ERRO:</h4><hr>'; // hr linha horizontal
			echo '<p>Não foi possivel efetuar o login usuário e senha, tente novamente</p></div>';
		}
			else if($msg == 'cadSuccess')
		{
			echo '<div class="alert alert-success">';
			echo '<h4 class="alert-heading">SUCESSO!</h4><hr>'; // hr linha horizontal
			echo '<p>Cadastro efetuado! Utilize o formulário abaixo para entrar no sistema</p></div>';
		}
		
	}
?>
	<h2 class="text-primary">Entrar No Sistema</h2><br>

	<form name="form_login" action="validar.php" method="post">
		
		<p>
			<label>Usuário ou E-mail: </label><br>
			<input type="text" name="usuario">
		</p>

		<p>
			<label>Senha: </label><br>
			<input type="password" name="senha">
		</p>



		<p>
			<button type="submit" name="btn_logar" class="btn btn-outline-success">Login</button>
			<a href="cadastrar_user.php" class="btn btn-outline-primary">Criar Cadastro</a>
		</p>

	</form>
	

</body>
</html>
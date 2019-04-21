<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<title> Cadastro de Clientes</title>
</head>
<body class="container">

	<?php include 'menu.php';

	if(!empty($_GET['msg']))
	{
		$msg = $_GET['msg'];

		if($msg == 'errorEmpty')
		{
			echo '<div class="alert alert-warning">';
			echo '<h4 class="alert-heading">ATENÇÃO:</h4><hr>'; // hr linha horizontal
			echo '<p>Preencha todos os campos do formulario</p></div>';
		}
		else if ($msg == 'errorUser')
		{
			echo '<div class="alert alert-danger">';
			echo '<h4 class="alert-heading">ATENÇÃO:</h4><hr>'; // hr linha horizontal
			echo '<p>Este usuário já existe! escolha outro nome de usário</p></div>';
		}
		else if ($msg == 'errorEmail')
		{
			echo '<div class="alert alert-danger">';
			echo '<h4 class="alert-heading">ATENÇÃO:</h4><hr>'; // hr linha horizontal
			echo '<p>Email ja está sendo utilizado por outro Usuário, informe um email válido!</p></div>';
		}
		else if ($msg = 'errorCad')
		{
			echo '<div class="alert alert-danger">';
			echo '<h4 class="alert-heading">ATENÇÃO:</h4><hr>'; // hr linha horizontal
			echo '<p>Não foi possivel realizar seu cadastro</p></div>';
		}
	}


	?>
	<h2 class="text-primary">Cadastre-se</h2><br>

	<form name="cadastrar_user" action="user_cad.php" method="post">
		
		<p>
			<label>CPF:</label><br>
			<input type="text" name="cpf">
		</p>

		<p>
			<label>Senha:</label><br>
			<input type="password" name="senha">
		</p>

		<p>
			<label>E-mail:</label><br>
			<input type="email" name="email">
		</p>

		<p>
			<button type="submit" class="btn btn-outline-info">Cadastrar</button>
		</p>
	</form>

</body>
</html>
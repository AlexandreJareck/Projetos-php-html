<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body class="container">


	<?php 

//	include 'menu.php';

	if(!empty($_GET['msg'])){
		
		$msg = $_GET['msg'];

		if ($msg == 'errorEmpty') {
			echo '<div class="alert alert-warning">';
			echo '<h4 class="alert-heading">ATENÇÃO</h4><hr>';
			echo '<p>Preencha o formulário abaixo para efetuar o login</p></div>';
		}

		else if ($msg == 'errorInvalid') {
			echo '<div class="alert alert-danger">';
			echo '<h4 class="alert-heading">ERRO: </h4><hr>';
			echo '<p>Verifique usuário e senha e tente novamente!</p></div>';
			
		}else if ($msg == 'cadSuccess') {
			echo '<div class="alert alert-success">';
			echo '<h4 class="alert-heading">SUCESSO: </h4><hr>';
			echo '<p>Cadastro efetuado com sucesso!</p></div>';
		}
	}

	?>

	<h2 class="text-dark">Entrar no sistema</h2>

	<form name="form_login" action="validar.php" method="post">
		<p>
			<label>Usuário ou email:</label><br>
			<input type="text" name="usuario">
		</p>

		<p>
			<label>Senha:</label><br>
			<input type="password" name="senha">
		</p>
			<button type="submit" name="btn_logar" class="btn btn-outline-primary">Login</button>
		</p>
	</form>



</body>
</html>
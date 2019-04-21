<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<title>Cadastre-se</title>
</head>
<body class="container">

	<?php 

	include 'func.php';

	verificar_msg();

	?>

	<h3 class="text-dark">Cadastre-se</h3>

	<form name="cadastrar" action="cadastrado.php" method="post">
		
		<p>
			<label>Nome de usuário:</label><br>
			<input type="text" name="usuario">
		</p>

		<p>
			<label>E-mail:</label><br>
			<input type="email" name="email">
		</p>

		<p>
			<label>Senha:</label><br>
			<input type="password" name="senha">
		</p>

		<p>
			<button type="submit" class="btn btn-outline-primary">
			Cadastrar
			</button>
		</p>

	</form>

</body>
</html>
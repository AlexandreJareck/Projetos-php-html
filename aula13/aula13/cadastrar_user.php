<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<title>Aula 13 - Cadastrar Usuario</title>
</head>
<body class="container">

<?php 

	include 'menu.php';
	include 'func.php';
	validar_msg();
?>

<h2 class="text-dark">Cadastre-se:</h2><br>

<form name="cad_user" action="user_cadastrado.php" method="post">

	<p>
		<label>Nome de usuário:</label><br>
		<input type="text" name="usuario">
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
		<button type="submit" class="btn btn-outline-primary">Cadastrar</button>
	</p>

	
</form>

</body>
</html>
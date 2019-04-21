<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<title>Aula 13 - Login</title>
</head>
<body class="container">

<?php 
	include 'menu.php'; 
	include 'func.php';
	validar_msg();
?>

<h3 class="text-dark">Entrar no sistema:</h3>
<form name="login" action="validar.php" method="post">

	<p>
		<label>Usuário ou E-mail</label><br>
		<input type="text" name="usuario">
	</p>

	<p>
		<label>Senha:</label><br>
		<input type="password" name="senha">
	</p>

	<p>
		<button class="btn btn-outline-primary" type="submit">
			Entrar
		</button>
	</p>
	
</form>

<br>

</body>
</html>
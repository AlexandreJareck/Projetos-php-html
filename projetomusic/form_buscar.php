<!DOCTYPE html>
<?php include 'lock.php'; ?>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<title>Procurar</title>
</head>
<body class="container">

	<?php include 'menu.php'; ?>

	<form name="palavra" action="buscar.php" method="post">
		<p>
			<label>Buscar Track</label> 
			<input type="text" name="palavra"> - <button class="btn btn-outline-dark btn-sm" type="submit">Procurar</button>
		</p>

	</form>
<a href="index.php" class="nav-link">Voltar</a>
</body>
</html>
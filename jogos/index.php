<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<title>Cadastro de Jogos</title>
</head>
<body class="container">


<?php if (session_status() == PHP_SESSION_NONE)
	{ // senão há sessão ativa
		session_start(); // inicie sessão

	}
// com a sessão iniciada, verifico se as variaveis de sessão está vazias
	if(empty($_SESSION['usuario']) || 
   	empty($_SESSION['senha']) )
	{ // se isso for verdade, então não estopu logado.
	// nesse caso, o menu me apresentará opções diferentes:

		include 'login.php';?>
		 <?php } else{
		 	$id_usuario = $_SESSION['id_usuario'];

		 	?>
		
		 <?php } ?>


	<?php include 'carousel.php'; ?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>

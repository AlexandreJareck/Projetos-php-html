<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<title>Playlist - Home</title>
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

		 	include 'listar.php';?>
		
		 
		
	<?php } ?>



	



</body>
</html>
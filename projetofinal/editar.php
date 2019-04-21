<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<title>Atualizar dados</title>
</head>
<body class="container">

	<?php include 'menu.php'; 

	if(!empty($_GET['id_flor']))
	{
		$id_flor = $_GET['id_flor'];

		include 'conn.php';

		$sql = "SELECT nome, preco, quantidade
				FROM t_flor
				WHERE id_flor = ".$id_flor;

		$resultado = mysqli_query($conn, $sql);

		if(mysqli_affected_rows($conn) > 0)
		{
			$nome = mysqli_fetch_assoc($resultado); ?>

			<h2 class="text-dark">Editar dados da encomenda</h2>
			<form name="form_editar"action="editado.php" method="post">
				<p>
					<label>Descrição:</label><br>
					<input type="text" name="nome">
				</p>

				<p>
					<label>Preço:</label><br>
					<input type="text" name="preco">
				</p>

				<p>
					<label>Quantidade:</label><br>
					<input type="text" name="quantidade">
				</p>


					
				<p>
					<button class="btn btn-outline-primary" type="submit">Concluir</button>
				</p>
					<input type="hidden" name="id_flor" value="<?php echo $id_flor; ?>">
				
			</form>

			<?php 
		}
	}

	?>


	


</body>
</html>
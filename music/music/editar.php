<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<title>Atualizar dados</title>
</head>
<body class="container">

	<?php include 'menu.php'; 

	if(!empty($_GET['id_musica']))
	{
		$id_musica = $_GET['id_musica'];

		include 'conn.php';

		$sql = "SELECT musica, banda, genero, tempo
				FROM tb_musica
				WHERE id_musica = ".$id_musica;

		$resultado = mysqli_query($conn, $sql);

		if(mysqli_affected_rows($conn) > 0)
		{
			$musica = mysqli_fetch_assoc($resultado); ?>

			<h2 class="text-dark">Editar música</h2>
			<form name="form_editar"action="editado.php" method="post">
				<p>
					<label>Musica:</label><br>
					<input type="text" name="musica">
				</p>

				<p>
					<label>Banda:</label><br>
					<input type="text" name="banda">
		
				</p>
	
				<p>
					<label>Gênero:</label><br>
					<input type="text" name="genero">
				</p>
				<p>
					<label>Duração:</label><br>
					<input type="text" name="tempo">
				</p>


					
				<p>
					<button class="btn btn-outline-primary" type="submit">Concluir</button>
				</p>
					<input type="hidden" name="id_musica" value="<?php echo $id_musica; ?>">
				
			</form>

			<?php 
		}
	}

	?>


	


</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<title>Editar Convidado</title>
</head>
<body class="container">



	<?php 
	include 'menu.php';

	if (!empty($_GET['id_jogo']))
	{
		$id = $_GET['id_jogo'];
		include 'conn.php';
			$sql = "SELECT id_jogo, jogo, categoria, data, desenvolvedora FROM tb_jogo WHERE id_jogo = " . $id;

			$resultado = mysqli_query($conn, $sql);

			if(mysqli_affected_rows($conn) > 0)
			{
				$convidado = mysqli_fetch_assoc($resultado);	

				?>

				<form name="form_editar" action="editado.php" method="post">

					<p>
						<label>Jogo: </label><br>
						<input type="text" name="jogo" value="<?php echo $convidado ['jogo']; ?> ">
					</p>

					<p>
						<label>Categoria: </label><br>
						<input type="text" name="categoria" value="<?php echo $convidado ['categoria']; ?> ">
					</p>

					<p>
						<label>Data:</label><br>
						<input type="date" name="data" value="<?php echo $convidado ['data']; ?> ">
					</p>		
					<label>Desenvolvedora: </label><br>
						<input type="text" name="desenvolvedora" value="<?php echo $convidado ['desenvolvedora']; ?> ">			
					<p>
						<button name="btn_editar" type="submit" class="btn btn-info">Editar</button>
					</p>
					

				</form>

				<?php
			}
	}
	else
	{
		echo '<h3 class="text-danger">ERROR004: NÃO FOI POSSIVEL CARREGAR O FORMULARIO!</h3>';


	}

	?>

</body>
</html>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<title>Editar Cadastro de Notebooks</title>
</head>
<body class="container">



	<?php 

	// incluir arquivo de conexaão
	include 'menu.php';

	if (!empty($_GET['id']))
	{
		$id = $_GET['id'];
		
			// criar comando sql
			$sql = "SELECT id, marca, cor, ram, proc, hd FROM tb_notes WHERE id = " . $id;
			// se o comando retornou algo (numero de linhas afetadas no mysql for maior que 0)
			$resultado = mysqli_query($conn, $sql);

			if(mysqli_affected_rows($conn) > 0)
			{
				// 'noot' se tornara um array associativo
				// a partir dos dados armazenados em ' resultado '
				$noot = mysqli_fetch_assoc($resultado);	

				?>

					<form name="editar" action="editado.php" method="post">

					<p>
						<label>Marca:</label><br>
						<input type="text" name="marca" value="<?php echo $noot ['marca']; ?> ">
					</p>

					<p>
						<label>Cor:</label><br>
						<input type="text" name="cor" value="<?php echo $noot ['cor']; ?> ">
					</p>

					<p>
						<label>Memória Ram:</label><br>
						<input type="text" name="ram" value="<?php echo $noot ['ram']; ?> ">
					</p>

					<p>
						<label>Processador:</label><br>
						<input type="text" name="proc" value="<?php echo $noot ['proc']; ?> ">
					</p>

					<p>
						<label>HD:</label><br>
						<input type="text" name="hd" value="<?php echo $noot ['hd']; ?> ">
					</p>

						<input type="hidden" name="id" value="<?php echo $noot ['id']; ?> ">
					
					<p>
						<button name="btn_editar" type="submit" class="btn btn-outline-success">Editar</button>
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
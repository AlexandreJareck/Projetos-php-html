
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<title>Editar Produtos</title>
</head>
<body class="container">



	<?php 

	// incluir arquivo de conexaão
	include 'menu.php';

	if (!empty($_GET['id']))
	{
		$id = $_GET['id'];
		
			// criar comando sql
			$sql = "SELECT id, nome, preco, qtd, qtd_estoque FROM tb_adm WHERE id = " . $id;
			// se o comando retornou algo (numero de linhas afetadas no mysql for maior que 0)
			$resultado = mysqli_query($conn, $sql);

			if(mysqli_affected_rows($conn) > 0)
			{
				// 'prod' se tornara um array associativo
				// a partir dos dados armazenados em ' resultado '
				$prod = mysqli_fetch_assoc($resultado);	

				?>

					<form name="editar" action="editado.php" method="post">

					<p>
						<label>Nome:</label><br>
						<input type="text" name="nome" value="<?php echo $prod ['nome']; ?> ">
					</p>

					<p>
						<label>Preço:</label><br>
						<input type="text" name="preco" value="<?php echo $prod ['preco']; ?> ">
					</p>

					<p>
						<label>Quantidade:</label><br>
						<input type="text" name="qtd" value="<?php echo $prod ['qtd']; ?> ">
					</p>

					<p>
						<label>Quantidade em Estoque:</label><br>
						<input type="text" name="qtd_estoque" value="<?php echo $prod ['qtd_estoque']; ?> ">
					</p>


						<input type="hidden" name="id" value="<?php echo $prod ['id']; ?> ">
					
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
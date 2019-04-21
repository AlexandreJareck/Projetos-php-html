<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<title>Aula 10 - Editar Convidado</title>
</head>
<body class="container">



	<?php 

	// incluir arquivo de conexaão
	include 'menu.php';

	if (!empty($_GET['id']))
	{
		$id = $_GET['id'];
		include 'conn.php';
			// criar comando sql
			$sql = "SELECT id, nome, fone, email FROM tb_convidados WHERE id = " . $id;
			
			// se o comando retornou algo (numero de linhas afetadas no mysql for maior que 0)
			$resultado = mysqli_query($conn, $sql);

			if(mysqli_affected_rows($conn) > 0)
			{
				// 'convidado' se tornara um array associativo
				// a partir dos dados armazenados em ' resultado '
				$convidado = mysqli_fetch_assoc($resultado);	

				?>
				<h2 class="text-info">Atualizar Lista de Convidados</h2>
				<form name="editar" action="editado.php" method="post">

					<p>
						<label>Nome: </label><br>
						<input type="text" name="nome" value="<?php echo $convidado ['nome']; ?> ">
					</p>

					<p>
						<label>Fone: </label><br>
						<input type="text" name="fone" value="<?php echo $convidado ['fone']; ?> ">
					</p>

					<p>
						<label>E-mail</label><br>
						<input type="email" name="email" value="<?php echo $convidado ['email']; ?> ">
					</p>

						<input type="hidden" name="id" value="<?php echo $convidado ['id']; ?> ">
					
					<p>
						<button name="btn-editar" type="submit" class="">Salvar</button>
					</p>
					

				</form>

				<?php
			}
			else{
				echo '<h3 class="text-danger">Não foi possível atualizar o formulário!</h3>';
			}
	}
	else
	{
		echo '<h3 class="text-danger">ERROR004: NÃO FOI POSSIVEL CARREGAR O FORMULARIO!</h3>';


	}

	?>

</body>
</html>
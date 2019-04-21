<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	
	<title>Editar Clientes</title>

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
			$sql = "SELECT id, nome, endereco, bairro, cep, cidade, uf, email, telefone FROM usuario WHERE id = " . $id;
			
			// se o comando retornou algo (numero de linhas afetadas no mysql for maior que 0)
			$resultado = mysqli_query($conn, $sql);

			if(mysqli_affected_rows($conn) > 0)
			{
				// 'cliente' se tornara um array associativo
				// a partir dos dados armazenados em ' resultado '
				$cliente = mysqli_fetch_assoc($resultado);	

				?>
				<h2 >Atualizar Lista de Clientes</h2>
				<form name="editar" action="editado.php" method="post">

					<p>
						<label>Nome: </label><br>
						<input type="text" name="nome" value="<?php echo $cliente ['nome']; ?> ">
					</p>

					<p>
						<label>Endereço: </label><br>
						<input type="text" name="endereco" value="<?php echo $cliente ['endereco']; ?> ">
					</p>

					<p>
						<label>Bairro: </label><br>
						<input type="text" name="bairro" value="<?php echo $cliente ['bairro']; ?> ">
					</p>

					<p>
						<label>CEP: </label><br>
						<input type="text" name="cep" value="<?php echo $cliente ['cep']; ?> ">
					</p>

					<p>
						<label>Cidade: </label><br>
						<input type="text" name="cidade" value="<?php echo $cliente ['cidade']; ?> ">
					</p>

					<p>
						<label>UF: </label><br>
						<input type="text" name="uf" value="<?php echo $cliente ['uf']; ?> ">
					</p>

					<p>
						<label>E-mail</label><br>
						<input type="email" name="email" value="<?php echo $cliente ['email']; ?> ">
					</p>

					<p>
						<label>Telefone: </label><br>
						<input type="text" name="telefone" class="form-control phone-ddd-mask" placeholder="(00) 0000-0000" value="<?php echo $cliente ['telefone']; ?> ">
					</p>




						<input type="hidden" name="id" value="<?php echo $cliente ['id']; ?> ">
					
					<p>
						<button name="btn-editar" type="submit" class="">Salvar</button>
					</p>
					

				</form>

				<?php
			}
			else{
				echo '<>Não foi possível atualizar o formulário!</h3>';
			}
	}
	else
	{
		echo '<h3 > NÃO FOI POSSIVEL CARREGAR O FORMULARIO!</h3>';


	}

	?>

</body>
</html>
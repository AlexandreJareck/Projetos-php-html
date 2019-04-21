<?php include 'lock.php';?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Cadastrar Produtos</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body class="container">


	<?php include 'menu.php';

		if(!empty($_GET['msg'])){
			$msg = $_GET['msg'];

			if($msg == 'errorEmpty'){
				echo '<div class="alert alert-warning">';
				echo '<h4 class="alert-heading">ATENÇÃO</h4><hr>';
				echo '<p>Preencha todos os campos do formulário!</p></div>';

			}else if($msg == 'errorCad'){
				echo '<div class="alert alert-danger">';
				echo '<h4 class="alert-heading">ATENÇÃO</h4><hr>';
				echo '<p>Não foi possível realizar seu cadastro!</p></div>';

			}
		}
	?>
	<h2 class="text-dark">Cadastrar Produtos</h2>

	<form name="cadastrar_flor" action="cadastro_flor.php" method="post">
		<p>
			<label>Nome:</label><br>
			<input type="text" name="nome">
		</p>

		<p>
			<label>Preço:</label><br>
			<input type="text" name="preco">
		</p>

		<p>
			<label>Quantidade:</label><br>
			<input type="text" name="qtd">
		</p>

		

		<input type="hidden" name="id" value="<?php echo $id; ?>" class="form-control">

		<p>
			<button type="submit" name="btn_cadastrar" class="btn btn-outline-info">Cadastrar</button>
		</p>


	</form>



</body>
</html>
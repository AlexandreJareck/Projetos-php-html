<?php include 'lock.php';?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Cadastrar Notebook</title>
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
	<h2 class="text-dark">Cadastrar Notebook</h2>

	<form name="cadastrar_note" action="cadastro_note.php" method="post">
		<p>
			<label>Marca:</label><br>
			<input type="text" name="marca">
		</p>

		<p>
			<label>Cor:</label><br>
			<input type="text" name="cor">
		</p>

		<p>
			<label>Memória RAM:</label><br>
			<input type="text" name="ram">
		</p>

		<p>
			<label>Processador:</label><br>
			<input type="text" name="proc">
		</p>

		<p>
			<label>HD:</label><br>
			<input type="text" name="hd">
		</p>

		<input type="hidden" name="id" value="<?php echo $id; ?>" class="form-control">

		<p>
			<button type="submit" name="btn_cadastrar" class="btn btn-outline-info">Cadastrar</button>
		</p>


	</form>



</body>
</html>
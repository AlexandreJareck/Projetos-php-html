<?php include 'conn.php';?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<title>Editar Cadastro de Notebooks</title>
</head>
<body class="container">
	<br>
	<h4 class="text-center">Alterar de Anamneses</h4><br>
	<?php
	if (!empty($_GET['id'])){
		$id = $_GET['id'];
		
		$sql = "SELECT id, anamnese, resposta FROM tb_anamnese WHERE id = " . $id;
		$resultado = mysqli_query($conn, $sql);

		if(mysqli_affected_rows($conn) > 0){
			$editar = mysqli_fetch_assoc($resultado);	

	?>

	<form name="editar" action="editado.php" method="post">

		<p>
			<label>Anamnese</label><br>
			<input type="text" name="anamnese" value="<?php echo $editar ['anamnese']; ?> ">
		</p>

		<p>
			<label>Resposta</label><br>
			<label><input type="radio" name="resposta" value="Sim">Sim</label>
			<label><input type="radio" name="resposta" value="Não">Não</label><br>
		</p>
			<input type="hidden" name="id" value="<?php echo $editar ['id']; ?> ">						
		<p>
			<button name="btn_editar" type="submit" class="btn btn-outline-success">Salvar</button>
		</p>
	
	</form>

	<?php
		}
	}else{
		echo '<h3 class="text-danger">ERROR: NÃO FOI POSSIVEL CARREGAR O FORMULARIO!</h3>';
	}

	?>

</body>
</html>
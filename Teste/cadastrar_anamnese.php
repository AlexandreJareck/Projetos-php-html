<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Cadastrar Anamnese</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body class="container">
	<br>
	<h4 class="text-center">Nova Anamnese</h4>
	
	<form name="cadastrar_anamnese" action="cadastro_anamnese.php" method="post">
		<p>
			<label>Anamnese:</label><br>
			<input type="text" name="anamnese">
		</p>
		
		<p>
			<label>Resposta:</label><br>
			<label><input type="radio" name="resposta" value="Sim">Sim</label>
			<label><input type="radio" name="resposta" value="Não">Não<br></label>
		</p>

		<input type="hidden" name="id" value="<?php echo $id; ?>" class="form-control">

		<p>
			<button type="submit" name="btn_cadastrar" class="btn btn-outline-info">Salvar</button>
		</p>
	</form>
</body>
</html>
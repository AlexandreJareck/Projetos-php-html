<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta author = "Alexandre Jareck">
	<meta aula="03">
	<meta date="08/10/2018">
	<title> -> Aula 03 <- {Home} </title>
	<link rel="stylesheet" type="text/css" href="mystyle.css">
</head>
<body>


	<h2>Preferências</h2>

	<form name="preferencias" action="respostas.php" method="post">
		<p>
			<b><label>Nome:</label><br></b>
			<input type="text" name="nome" class="campo">
		</p>

		<p>
			<b><label>E-Mail:</label><br></b>
			<input type="email" name="email" class="campo">
		</p>

			<b><label>Cor preferida:</label><br></b>
			<input type="color" name="cor" class="campo">

		<p>
			<label>Prefere estudar:</label><br>
			<select name="turno" class="campo">
				<option value="Manhã" selected>Manhã</option>
				<option value="Trade" selected>Tarde</option>
				<option value="Noite" selected>Noite</option>
			</select>
		</p>

		<p>
			<button type="submit" class="botao enviar">Enviar</button>
			<button type="reset" class= "botao limpar">Limpar</button>
		</p>

	</form>

	<br>
	<br>
	<br>

	<h2>Cálculo da Idade</h2>

	<form name="calcidade" action="respostas.php" method="get" class="campo">
		<p>
		<label>Ano Atual</label><br>
		<input type="number" name="ano_atual" class="campo">
	</p>
	<p>
		<label>Ano do seu nascimento</label><br>
		<input type="number" name="ano_nasc">
	</p>

		<p>
			<button type="submit" class="botao enviar">Enviar</button>
			<button type="reset" class= "botao limpar">Limpar</button>
		</p>

		
	</form>

</body>
</html>
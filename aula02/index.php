<!DOCTYPE html>
<html lang="pt-br">  <!-- P DEIXAR EM PORTUGUES -->
<head>
	<meta charset="utf-8"> <!-- RECONHECER CARACTERER-->
	<!-- EXEMPLO DE COMENTARIO HTML-->
	<link rel="stylesheet" type="text/css" href="meu_estilo.css">

	<title>Aula 02 - Home </title>
</head>
<body>
	<h1>Formulário 01 - cadastro</h1>
	<form name="cadastro01" action= "respostas.php" method= "post">
		<p>
			<label><b>Nome:</b></label><br>
			<input type ="text" name="nome" required="true" >
		</p>

		<p>
			<label><b>Idade:</b></label><br>
			<input type ="number" name="idade" required="true">
		</p>

		<p>
			<label><b>E-mail:</b></label><br>
			<input type="email" name="email" required="true">
		</p>

		<p>
			<button type ="submit">Enviar</button>
		</p>

	</form>

</body>
</html>
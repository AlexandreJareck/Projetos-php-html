<!DOCTYPE html>
<html lang="pt-br">
<head>
	<link rel="stylesheet" type="text/css" href="meu_estilo.css">
		<meta charset="utf-8">
		<title>Aula 02 - Respostas</title>
</head>
<body>

		<p>
			<a href="index.php">Voltar para home</a>

		</p>


		<?php 

	if(empty($_POST['nome']) || empty($_POST['idade']) || empty($_POST['email']))

		{
			echo "<h2>Nenhum dado recebido do Form 1 </h2>";
		}

else
	{



		// RECEBER DADOS DO FORMULARIO 1 e ARMAZENAR EM VARIAVEIS:

		$nome = $_POST['nome']; // CAMPO NOME ENAVIADO VIA POST
		$idade = $_POST['idade']; // CAMPO IDADE ENAVIADO VIA POST
		$email = $_POST['email'];// CAMPO PARA RECEBER EMAIL 

		// EXIBINDO OS DADOS DO FORMULARIO NA TELA:

		echo "<h2>Dados recebidos do formulario 1:</h2>";
		echo "<p><b>Nome:</b> " . $nome . "<br>";
		echo "<b>Idade:</b> " . $idade . "<br>";
		echo "<b>E-mail:</b>". $email . "<br></p>";
	}

		 ?>

</body>
</html>
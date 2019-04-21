<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<title>Aula 04 - Respostas</title>
</head>
<body class="container-fluid">
	
	<br>
	<p>
		<a href="index.php">Voltar para Home</a>
	</p>
	
	<?php 

	// verificar se chegamos na pag respostas.php pelo form1.php
	if(isset($_POST['enviar_ex1']))
	{
		// agora vamos verificar se preenchemos os dois campos
		// obrigatórios:
		if(empty($_POST['nome']) || empty($_POST['matricula']))
		{
			// se qualquer um dos campos estiver em braco, apresentamos
			// msg de erro ao usuário
			echo '<h2 class="alert alert-warning">Nenhum dado recebido do formulário ex 1</h2>';
		}
		else // senão...
		{
			// receber dados do formulário:
			$nome		= $_POST['nome'];
			$matricula 	= $_POST['matricula'];
			$curso 		= $_POST['curso'];
			$campus 	= $_POST['campus'];

			// exibir dados na tela:
			echo '<h3 class="text text-info">Dados Cadastrados:</h3>';

			echo "<b>Nome:</b> " . $nome ."<br>";
			echo "<b>Matrícula:</b> " . $matricula ."<br>";
			echo "<b>Curso:</b> " . $curso ."<br>";
			echo "<b>Campus:</b> " . $campus ."<br>";
		}
	}// fim if 'enviar_ex1'
	else
	{
		echo '<h2 class="alert alert-danger">ERRO: nenhum formulário foi preenchido.<br>
			Volte para home e preencha um formulário</h2>';

	}

	?>

</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Respostas</title>

</head>
<body class="container">

	<br><br> 

	<a href="index.php" class="btn btn-outline-info">Voltar para Home</a>

	<?php 
	if( isset($_POST['nome']) && 
		isset($_POST['nick']) && 
		isset($_POST['emaill']) && 
		isset($_POST['emailll']) && 
		isset($_POST['date'])&& 
		isset($_POST['senha1'])&& 
		isset($_POST['senha2'])&& 
		isset($_POST['resp'])&& 
		isset($_POST['perg'])&& 
		isset($_POST['enviar']))
	{
			$nome = $_POST['nome'];
			$nick = $_POST['nick'];
			$emaill = $_POST['emaill'];
			$emailll = $_POST['emailll'];
			$date = $_POST['date'];
			$senha1 = $_POST['senha1'];
			$senha2 = $_POST['senha2'];
			$perg = $_POST['perg'];
			$resp = $_POST['resp'];

			if($nome== '' || $nick=='' ||$emaill=='' || $emailll=='' || $date=='' || $senha1=='' || 
				$senha2=='' || $perg == '' || $resp=='')

			{
				echo '<div class="container alert-danger">';
				echo '<br>';
				echo '<h2>ATENÇÃO</h2>';
				echo 'Nenhum formulário recebido!';
				echo '<br><br>';
				echo '</div>';
			}
			else
			{
			echo "<h2>Respostas da Prova</h2>";
			echo "<p>";
			echo "Nome: " . $nome . "<br>";
			echo "Seu Nick : " . $nick . "<br>";
			echo "Email: " . $emaill . "<br>";
			echo "Confirmação do Email: " . $emailll . "<br>";
			echo "Data de Nascimento: " . date('d/n/Y', strtotime($date)) . "<br>";
			echo "Senha: " . $senha1 . "<br>";
			echo "Confirmação da Senha  : " . $senha2 . "<br>";
			echo "Pergunta secreta: " . $perg . "<br>";
			echo "Resposta: " . $resp  ;
			echo "</p>"; 
			}
			if($senha1 != $senha2)
			{
				echo '<div class="container alert-danger">';
				echo '<br>';
				echo '<h2>ATENÇÃO</h2>';
				echo 'Senhas não conferem';
				echo '<br><br>';
				echo '</div>';
			}
			if($emaill != $emailll)
			{
				echo '<div class="container alert-danger">';
				echo '<br>';
				echo '<h2>ATENÇÃO</h2>';
				echo 'Email não conferem';
				echo '<br><br>';
				echo '</div>';

			}
	}

	?>

</body>
</html>
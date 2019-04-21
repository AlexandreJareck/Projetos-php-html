<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">

	<title> Aula 03 - Respostas</title>
</head>
<body>

	<?php 
	if(empty($_POST['nome']) ||
		empty($_POST['email']) ||
		empty($_POST['cor']))
	{
		echo"<h1> Nenhum campo preenchido!!</h1>";
	}
	else
	{
		// RECEBE OS DADOS DO FORMULARIO
		$nome = $_POST['nome'];
		$email = $_POST['email'];
		$cor = $_POST['cor'];
		$turno = $_POST['turno'];
		echo "<h2> Preferências de ".$nome."</h2<br>";
		echo "<p><b>Email de contato: </b>".$email."<br>";
		echo "<b>Cor preferida (em hexadecimal): </b>".$cor."<br>";
		echo "<b> Prefere estudar no turno da: </b>".$turno."</p>";
	}
// ------------------------------------------------------------------------

	if(empty($_GET['ano_atual']) || empty($_GET['ano_nasc']) )

	{
		echo "<h2> Nenhum dado recebido do form para calcular idade </h2>";

	}
	else
	{
		$ano_atual = $_GET['ano_atual'];
		$ano_nasc = $_GET['ano_nasc'];

		$idade = $ano_atual - $ano_nasc;

		echo "<h2>Cálculo da Idade </h2>";

		if($idade >= 18) 
		{

			echo " <p>Em ".$ano_atual." você tera ".$idade. " anos. Portanto, pode tirar a CNH</p><br> ";

		}
		else
		{
			echo " <p>Em ".$ano_atual." você tera".$idade." anos. Portanto, <b>NÃO</b> pode tirar a CNH</P><br> ";
		}
	}

	?>

</body>
</html>
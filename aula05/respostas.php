<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<title>Aula 05 - Respostas</title>
</head>
<body class="container">

	<br><br>

	<a href="index.php" class="btn btn-outline-info">Voltar para Home</a>

	<br><br>
<?php 

	if( isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['enviarex1']) )
	{
		$num1 = $_POST['num1'];
		$num2 = $_POST['num2'];
		$soma = $num1 + $num2;
		$sub = $num1 - $num2;
		$mult = $num1 * $num2;

		if ($num2 == 0) 
		{
			$div == 0;
		}
		else
		{
			$div = $num1 / $num2;
		}


	echo "<h2>Respostas do Ex 01</h2>";
	echo "<p>";
	echo "Primeiro Valor: " . $num1 . "<br>";
	echo "Segundo Valor:" . $num2 . "<br>";
	echo "Soma :" . $soma . "<br>";
	echo "Subtração: " . $sub . "<br>";
	echo "Multiplicação: " . $mult . "<br>";
	echo "Divisão :" . $div . "<br>";
	echo "</p>";

	}

?>
</body>
</html>
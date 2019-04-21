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

		if( isset($_POST['num1']) && 
		    isset($_POST['num2']) && 
		    isset($_POST['enviarEx1']) )
		{
			// código abaixo será executado:
			$num1 = $_POST['num1'];
			$num2 = $_POST['num2'];

			$soma = $num1 + $num2;
			$subt = $num1 - $num2;
			$mult = $num1 * $num2;

			if($num2 == 0)
			{// se $num2 for igual a zero
				$divi = 0;

			}else{

				$divi = $num1 / $num2;
			}

			echo "<h2>Resposta do Ex1</h2>";
			echo "<p>";
			echo "Primeiro valor: " . $num1 . "<br>";
			echo "Segundo valor: " . $num2 . "<br>";
			echo "Soma: " . $soma . "<br>";
			echo "Subtração: " . $subt . "<br>";
			echo "Multiplicação: " . $mult . "<br>";
			echo "Divisão: " . $divi . "<br>";
			echo "</p>";
		
		}// fim if campos ex1

		else if ( isset($_POST['n1']) &&
			 isset($_POST['n2']) &&
			 isset($_POST['n3']) &&
			 isset($_POST['n4']) &&
			 isset($_POST['enviarEx2']) ) 
		{

			$n1 = $_POST['n1'];
			$n2 = $_POST['n2'];
			$n3 = $_POST['n3'];
			$n4 = $_POST['n4'];

			$media = ($n1+$n2+$n3+$n4)/4;

			echo "<h2>Resposta do Ex2</h2>";
			echo "<p>";
			echo "Notas informadas:<br>";
			echo "Nota 1: " . $n1 . "<br>";
			echo "Nota 2: " . $n2 . "<br>";
			echo "Nota 3: " . $n3 . "<br>";
			echo "Nota 4: " . $n4 . "<br>";
			echo "Média: " . $media;
			echo "</p>";
		}

		else
		{
			echo '<div class="container alert-danger">';
			echo '<br>';
			echo '<h2>ATENÇÃO</h2>';
			echo 'Nenhum formulário recebido!';
			echo '<br><br>';
			echo '</div>';
		}

	?>




</body>
</html>
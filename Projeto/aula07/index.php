<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<title>Aula 07 - Exemplo 01 - Arrays</title>
</head>
<body class="container">


	<?php include 'menu.php'; ?> 


		<h2>Array Multidimensional</h2>
	
		<?php 
			$pessoa1 = array ("Huguinho", 18);
			$pessoa2 = array ("Zézinho", 18);
			$pessoa3 = array ("Luizinho", 18);

			$cadastro = array($pessoa1,$pessoa2,$pessoa3);

			echo '<br><h4>Cadastro</h4>';
			echo '<p>';
			echo 'Nome: ' . $cadastro[0][0] . '<br>';
			echo 'Idade: ' . $cadastro[0][1] . '<br>';
			echo '</p>';


			echo '<br><h4>Cadastro</h4>';
			echo '<p>';
			echo 'Nome: ' . $cadastro[1][0] . '<br>';
			echo 'Idade: ' . $cadastro[1][1] . '<br>';
			echo '</p>';



			echo '<br><h4>Cadastro</h4>';
			echo '<p>';
			echo 'Nome: ' . $cadastro[2][0] . '<br>';
			echo 'Idade: ' . $cadastro[2][1] . '<br>';
			echo '</p>';

			echo '<br><h4>Cadastro</h4>';
			echo '<pre>';
			print_r($cadastro);
			echo '</pre>';

		?>

</body>
</html>
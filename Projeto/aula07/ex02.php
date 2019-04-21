<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<title>Aula 07 Exemplo 02 - Arrays</title>
</head>
<body class="container">

	<?php include 'menu.php'; ?>

	<h2>Array Multidimensional Associativo</h2>

	<?php 

		$carro1 = array ('marca' => 'Ford','modelo' => 'Fiesta', 'cor' => 'vermelho', 'ano' => 2012);

		$carro2 = array ('marca' => 'Fiat','modelo' => 'Uno', 'cor' => 'Branco', 'ano' => 2014);

		$carro3 = array ('marca' => 'Honda','modelo' => 'Cinvic', 'cor' => 'Prata', 'ano' => 2012);


		/* ----o código acima é o mesmo que fazer :
		$carro1 = array();
		$carro1['marca'] = 'Ford'
		$carro1['modelo'] ='Fiesta'
		$carro1['cor'] = 'Vermelho';
		$carro1['ano'] = 2012; -------------------*/


		$garagem = array ('vaga1' => $carro1, 'vaga2' => $carro2, 'vaga3' => $carro3);

		echo '<br><h4>Garagem</h4><br>';

		//carro1:

		echo '<p>Vaga 1: <br>';
		echo 'Marca: '  . $garagem['vaga1']['marca']  . '<br>';
		echo 'Modelo: ' . $garagem['vaga1']['modelo'] . '<br>';
		echo 'Cor: '    . $garagem['vaga1']['cor']    . '<br>';
		echo 'Ano: '    . $garagem['vaga1']['ano']    . '<br>';
		echo '</p> ';

		//carro2:

		echo '<p>Vaga 2: <br>';
		echo 'Marca: '  . $garagem['vaga2']['marca']  . '<br>';
		echo 'Modelo: ' . $garagem['vaga2']['modelo'] . '<br>';
		echo 'Cor: '    . $garagem['vaga2']['cor']    . '<br>';
		echo 'Ano: '    . $garagem['vaga2']['ano']    . '<br>';
		echo '</p> ';


		//carro3:
		echo '<p>Vaga 3: <br>';
		echo 'Marca: '  . $garagem['vaga3']['marca']  . '<br>';
		echo 'Modelo: ' . $garagem['vaga3']['modelo'] . '<br>';
		echo 'Cor: '    . $garagem['vaga3']['cor']    . '<br>';
		echo 'Ano: '    . $garagem['vaga3']['ano']    . '<br>';
		echo '</p> ';


		echo '<br><h4>Cadastro</h4>';
			echo '<pre>';
			print_r($garagem);
			echo '</pre>';
	?>



</body>
</html>
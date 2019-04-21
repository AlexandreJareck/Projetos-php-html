<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<title>Aula 07 - Exemplo - Arrays</title>
</head>
<body class="container">

	<?php include 'menu.php'; ?>

	<h4>Percorrendo arrays com foreach</h4>

	<?php 


		//exemplo 01

			$filme = array ('titulo' => 'Sharknado',
							'genero' => 'WTF',
							'ano'    => 2014);

			echo '<br><h4>Exibindo dados do Filme 1</h4><br>';

			foreach ($filme as $indice => $valor) 
			{
				echo '<b>'. strtoupper($indice) . '</b>: ' . $valor . '<br>'; //strtpupper deixa tudo em "CAIXA ALTA"
				
			}



			//exemplo 02

			$filme2 = array('titulo' => 'Robocop',
							'genero' => 'Ação',
							'ano'    => 2015);

			$filme3 = array('titulo' => 'Deadpool 2',
							'genero' => 'Ação/Comédia',
							'ano'    => 2017);


			$catalogo = array('filme' => $filme,
							  'filme2' => $filme2,
							  'filme3' => $filme3);

			echo '<br><h4>Filmes do catálogo</h4>';

			foreach ($catalogo as $indice_cat => $filme_atual) 
			{
				echo '<p><b>' . $indice_cat . '</b><br>' ;

				foreach ($filme_atual as $indice_filme => $valor) 
				{
					
					echo '<b>' . strtoupper($indice_filme) . ':</b>' . $valor . '<br>';
				}
				echo '</p>';
			}

				// Mostrando o catalogo com print_r

			echo '<br><h4>Cadastro</h4>';
			echo '<pre>';
			print_r($catalogo);
			echo '</pre>';

	?>




</body>
</html>
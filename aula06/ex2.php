<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<title>Aula 06 - Laços</title>
</head>
<body class="container-fluid">
	<h2>Laço for (para) - Exemplo 01</h2>

	<?php

		// executar 10 repetições e mostrar o valor aatual do contador:

		for($i=1; $i < 11; $i++)
		{
			echo 'Valor atual do contador: ' . $i . '<br>';
		}





	 ?>

	 <h2>Laço for (para) - Exemplo 02</h2>

	 <?php 

	 	for($i=0;$i<=20 ; $i++) // mostra valores pares dentro de um itervalo entre 0 e 20

	 		{
	 			if($i % 2 == 0) // % = MOD

	 			{
	 				// se o resto da divisa de $i por 2 for igual a zero:
	 				echo 'Valor par atual: ' . $i . '<br>';
	 			}
	 			else
	 			{
	 				echo 'Valor imrpar atual: ' . $i . '<br>'; // aqui só foi um teste
	 			}

	 		}

	 ?>

	 <h2>Laço while (enquanto) - Exemplo 01</h2>

	 <?php 

	 	$num = 0;
	 	// mostra o valor de '$num' enquanto ele for meno que 10

	 	while ($num < 10) 
	 	{
	 		echo 'Valor atual de $num: ' . $num . '<br>';
	 		$num+= 3; // $num = $num + 3
	 	}

	 ?>


	 <h2>Laço do/while (faça/enquanto) - Exemplo 01</h2>

	 <?php 

	 	$n1 = 0;
	 	$n2 = 1;

	 	do 
	 	{
	 		echo 'Valor de n1: ' . $n1 . '<br>';
			echo 'Valor de n2: ' . $n2 . '<br>';

			$n1 += 2;
			$n2 += 1;

	 	
	 	}while ($n1 < $n2); // enquanto essa condição for verdadeira 

	 ?>


	 <h2>Foreach (para cada) - Exemplo 01 </h2>
	 <h4>OBS : LAÇO PRÓPRIO PARA TRABALHAR COM ARRAYS</h4>

	 <?php 

	 	$estados = array("PR","SC","RS");
	 	echo '<h4>Estados do sul do Brasil</h4>';
	 	foreach ($estados as $valor)  // 
	 		{
	 			echo $valor . '<br>';
	 		}

	 ?>

	 <h2>Foreach (para cada) - Exemplo 01 </h2>

	 	<?php

	 	$dados = array ();
	 	$dados['Nome'] = "Alexandre Jareck";
	 	$dados['Email'] = "alexndrenicolas222@yahoo.com.br";
	 	$dados['Fone'] = "(41) 9988-8988";
	 	$dados['Endereco'] = "Rua da paz, 123";

	 		foreach ($dados as $indice => $valor) 
	 		{
	 			echo strtoupper($indice) . ": " . $valor . '<br>';
	 		}


	 	?>


</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<title>Aula 06 - Arrays - Home</title>
</head>
<body class="container-fluid">

	<?php include 'menu.php';?>

	<h2>Array Indexado - Exemplo 01</h2>

	<?php 
	//declaração de um Array:
	$nomes = array(); // array = boa pratica! - iniciar sempre em 0, n~precisa determinar tamanho!!

	// atribuindo de valores par ao array:

	$nomes[0] = 'Huguinho';
	$nomes[1] = 'Zézinho';
	$nomes[2] = 'Luizinho';

	//mostrandop valores com 'echo'

	echo '<h4>Saída Tradicional (echo) </h4>';
	$nomes[0]  . "<br>" ;
	$nomes[1]  . "<br>";
	$nomes[2]  . "<br>";

	// mostrando valores com print_r:

	echo '<h4>Saída com print_r </h4>';
	echo '<pre>';
	print_r($nomes); // comonado para testes | print_r é ultil para ver se os valores do arrya esta sendo atribuido de maneira correta. 
	// print_r é mais usado para um debug.
	echo '</pre>'; // pre uma tag de texto pré formatado. cada enter é uma quebra de linha!, não é muito util. | Pode ocasionar bagunça.

	// testar com <pre> comentado!



	?>

	// Segundo Exemplo

	<h2>Array Indexado  - Exemplo 02</h2>

	<?php  

		$cidades = array("Curitiba", "São Paulo", "Porto Alegre", "Florianópolis"); // valores numéricos é separado apenas por virgula.

		echo '<h4>Saída com print_r</h4>';
		echo '<pre>';
		print_r($cidades); // comando para testes!
		echo '</pre>';	

	?>

	<h2>Array Indexado  - Exemplo 03</h2>

	<?php 

	//array dinamicos: o php fica determinado para por cada valor nos indice, colchete determina que "carros é um array". 
	// manualmente tem riscos de errar, as vezes pula a posição que não eh para pular.

	$carros[] = "Celta";
	$carros[] = "Ka";
	$carros[] = "Fiesta";
	$carros[] = "Onix";
	$carros[] = "Uno";

// as posicoes acima foram definidas automaticamente pelo PHP!!!


	echo '<h4>Saída com print_r</h4>';
	echo '<pre>';
	print_r($carros);
	echo '</pre>';

	?>

	<h2>Array <b><i>Associativo</i></b> - Exemplo 01</h2>

	<?php 

	$dados = array();

	$dados['nome'] = "Alexandre Jareck";
	$dados['idade'] = 23;
	$dados['altura'] = 1.73;
	$dados['email'] = "alexandrenicolas222@yahoo.com.br";


	echo '<h4>Saída Tradicionais (echo) </h4>';
	echo 'Nome: '   . $dados['nome']    . '<br>';
	echo 'Idade: '  . $dados['idade']   . '<br>';
	echo 'Altura: ' . $dados['altura'] . '<br>';
	echo 'Email: '  . $dados['email']   . '<br>';


	echo '<h4>Saída com print_r</h4>';
	echo '<pre>';
	print_r ($dados);
	echo '</pre>';

	?>

	<h2>Array <b><i>Associativo</i></b> - Exemplo 02</h2>


	<?php

	$produto1 = array("Camiseta Branca", "Tamanho M", 29.99);
	$produto2 = array("Calça jeans Preta", "42", 79.90);
	$produto3 = array("Blusa De Moletom Azul", "G", 129.98);

	$produtos['Produto 1'] = $produto1;
	$produtos['Produto 2'] = $produto2;
	$produtos['Produto 3'] = $produto3;
	


	echo '<h4>Saída Tradicional (echo) </h4>';

	echo 'Produto: ' . $produtos['Produto 1'][0] . '<br>';
	echo 'Tamanho: ' . $produtos['Produto 1'][1] . '<br>';
	echo 'Preço: R$ ' . $produtos['Produto 1'][2] . '<br><br>';

	echo 'Produto: ' . $produtos['Produto 2'][0] . '<br>';
	echo 'Tamanho: ' . $produtos['Produto 2'][1] . '<br>';
	echo 'Preço: R$ ' . $produtos['Produto 2'][2] . '<br><br>';

	echo 'Produto: ' . $produtos['Produto 3'][0] . '<br>';
	echo 'Tamanho: ' . $produtos['Produto 3'][1] . '<br>';
	echo 'Preço: R$ ' . $produtos['Produto 3'][2] . '<br><br>';



	echo '<h4>Saída com print_r</h4>';
	echo '<pre>';
	print_r ($produtos);
	echo '</pre>';


	?>

</body>
</html>
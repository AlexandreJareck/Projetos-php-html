<?php include 'lock.php';?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<title>Gerenciar Produtos</title>
</head>
<body class="container">

	<?php 

		include 'menu.php';



		//criar comando sql

		$sql = "SELECT * FROM tb_adm";
		// incluir comando de conexão

		
		// executar o comando

		$resultado = mysqli_query($conn, $sql);

		// verificar se a consulta retornou algum registro

		if(mysqli_affected_rows($conn) > 0)
		{
			// criar array para receber dados da tabela

			$registro = array();

				//montamos a parte inicial da tabela
			echo '<table class ="table table-hover">' ;

			echo '<tr>';
				echo '<th>Id:   </th>';
				echo '<th>Nome:   </th>';
				echo '<th>Preço:   </th>';
				echo '<th>Quantidade: </th>';
				echo '<th>Quantidade em Estoque: </th>';
			echo '</tr>';





			//enquanto houverem registros em 'resultado'
			//copie cada registro para uma posição do 
			// array 'registros'

			while ($registros = mysqli_fetch_assoc($resultado))

			{
				// criar forech para percorrer posição atual de 'registros'
				echo '<tr>';
				foreach($registros as $indice => $valor)
				{

					// se o indice atual for ' id '
					if($indice =='id')

					{
						// copie o valor associado a esse indice
						// para a variavel ' id'
						$id = $valor;
					}
// para deixar alinhado os campos usar ~> class="text-center"
					echo  "<td> " . $valor . '</td>';
				}

				echo '<td class="text-center">';
				echo ' <a href="editar.php?id=' . $id . '" class="btn btn-outline-primary">Editar</a>';
				echo '</td>';

				echo '<td class="text-center">';
				echo ' <a href="deletar.php?id=' . $id . '" class="btn btn-outline-danger" onClick="return confirm
				(\'Deseja excluir os dados do notebook do seu cadastro ?\')">Deletar</a>';
				echo '</td>';

			}
			echo '</tr>';
			echo '</table>';
				// fecha a conexão 
				mysqli_close($conn);
		}
		else if(mysqli_affected_rows($conn)==0)
		{
			echo '<h3 class="text-warning">Não há notebooks cadastrados ainda!</h3>';
		}
		else
		{
			echo '<h3 class="text-danger">Erro ao buscar dados na tabela<br>  Detalhe do erro: '. mysqli_error($conn).'</h3>';
		}


	?>

</body>
</html>
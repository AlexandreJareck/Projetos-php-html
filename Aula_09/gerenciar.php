<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	
	<title>Aula 10 - Gerenciar Convidados</title>
</head>
<body class="container">

	<?php 

		include 'menu.php';

		//criar comando sql
include 'conn.php';
		$sql = "SELECT id, nome, fone, email FROM tb_convidados";
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
				echo '<th>#</th>';
				echo '<th>Nome:   </th>';
				echo '<th>Fone:   </th>';
				echo '<th>E-mail: </th>';
				echo '<th colspan="2" class="text-center">Gerenciar   </th>';
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
				echo ' <a href="editar.php?id=' . $id . '" class="btn btn-primary">Editar</a>';
				echo '</td>';

				echo '<td class="text-center">';
				echo ' <a href="deletar.php?id=' . $id . '" class="btn btn-danger" onClick="return confirm
				(\'Deseja excluir o candidato de sua lista ?\')">Deletar</a>';
				echo '</td>';

				echo '</tr>';
			}
			
			echo '</table>';
				// fecha a conexão 
				mysqli_close($conn);
		}
		else if(mysqli_affected_rows($conn)==0)
		{
			echo '<h3 class="text-warning">Não há convidados cadastrados ainda!</h3>';
		}
		else
		{
			echo '<h3 class="text-danger">Erro ao buscar dados na tabela<br>  Detalhe do erro: ' . mysqli_error($conn).'</h3>';
		}


	?>

</body>
</html>
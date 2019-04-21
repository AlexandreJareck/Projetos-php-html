<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	
	<title>Lista de Cadastrados</title>
</head>

<style >
	
	table{
        width: 900px;
        margin: 0 auto;
	}
</style>

<body class="container">

	<?php 

		include 'menu.php';

		//criar comando sql

		$sql = "SELECT id, nome, telefone FROM usuario";
		// incluir comando de conexão
		include 'conn.php';

		// executar o comando

		$resultado = mysqli_query($conn, $sql);

		// verificar se a consulta retornou algum registro

		if(mysqli_affected_rows($conn) > 0)
		{
			// criar array para receber dados da tabela

			$registro = array();

				//montamos a parte inicial da tabela
			echo '<table border="1" width="50%" bordercolor="#FFFFFF">' ;

			echo '<tr>';
				echo '<th>ID </th>';
				echo '<th>Nome </th>';
				echo '<th>Telefone </th>';
				
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
					echo  "<td> " . $valor . '</td>';
				}
				echo '</tr>';

			}

			echo '</table>';
				// fecha a conexão 
				mysqli_close($conn);
		}
		else if(mysqli_affected_rows($conn)==0)
		{
			echo '<h3 Não há convidados cadastrados ainda!</h3>';
		}
		else
		{
			echo '<h3 Erro ao buscar dados na tabela<br>
			Detalhe do erro: '. mysqli_error($conn).'</h3>';
		}


	?>

</body>
</html>
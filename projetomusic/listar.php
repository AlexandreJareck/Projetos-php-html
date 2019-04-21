<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<title>Playlist </title>
</head>
<body class="container">
	<?php include 'func.php'; ?>
<h3 class="text-dark">Lista de <b><?php echo $_SESSION['usuario']; ?></b></h3><br>
	<?php 		
		include 'conn.php';

		//criar comando sql


			if($id_usuario == 10)
			{
				$sql = "SELECT id_musica, musica, banda, genero, tempo FROM tb_musica ORDER BY id_musica DESC LIMIT 0, 10";
			}
			else
			{
				$sql = "SELECT id_musica, musica, banda, genero, tempo FROM
				tb_musica INNER JOIN tb_usuario 
				ON tb_musica.id_usuario = tb_usuario.id_usuario 
				WHERE tb_musica.id_usuario = $id_usuario ORDER BY id_musica DESC LIMIT 0, 10 ";
			}
		// incluir comando de conexão

		// executar o comando

		$resultado = mysqli_query($conn, $sql);

		// verificar se a consulta retornou algum registro

		if(mysqli_affected_rows($conn) > 0)
		{
			// criar array para receber dados da tabela

			$registro = array();

				//montamos a parte inicial da tabela
		echo '<div class="table-responsive">';
		echo '<table class="table table-hover table-bordered">';
		echo '<thead class="thead-dark">';
		echo '<tr>';
		echo '<th>#</th>';
		echo '<th>Track</th>';
		echo '<th>DJ</th>';
		echo '<th>Genero</th>';
		echo '<th>Duração</th>';
		echo '</tr>';
		echo '</thead>';
		echo '</div>';





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
			echo '<h3 class="text-warning">Você não salvou nenhuma música!</h3>';
		}
		else
		{
			echo '<h3 class="text-danger">Erro ao buscar musicas na playlist<br>
			Detalhe do erro: ' . mysqli_error($conn) .'</h3>';
		}


	?>

</body>
</html>
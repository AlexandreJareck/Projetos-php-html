<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body class="container">
	<br>
	<h4 class="text-center">Listagem de Anamneses</h4><br>
	
	<p>
		<a href="cadastrar_anamnese.php" class="btn btn-outline-primary">Nova Anamnese</a>
	</p>

	<?php 
		include 'conn.php';

		$sql = "SELECT * FROM tb_anamnese";
		
		$resultado = mysqli_query($conn, $sql);

		if(mysqli_affected_rows($conn) > 0){

			$registro = array();

			echo '<table class ="table table-hover">' ;

			echo '<tr>';
				echo '<th>Código   </th>';
				echo '<th>Anamnese   </th>';
				echo '<th>Resposta   </th>';
				echo '<th class="text-center" colspan=3>Opções </th>';
			echo '</tr>';

			while ($registros = mysqli_fetch_assoc($resultado))

			{
				echo '<tr>';
				foreach($registros as $indice => $valor){
					if($indice =='id'){
						$id = $valor;
					}
				// para deixar alinhado os campos usar ~> class="text-center"
					echo  "<td> " . $valor . '</td>';
				}

				echo '<td class="text-center">';
				echo ' <a href="listar.php?id=' . $id . '" class="btn btn-outline-primary">V</a>';
				echo '</td>';

				echo '<td class="text-center">';
				echo ' <a href="editar.php?id=' . $id . '" class="btn btn-outline-primary">A</a>';
				echo '</td>';

				echo '<td class="text-center">';
				echo ' <a href="deletar.php?id=' . $id . '" class="btn btn-outline-danger" onClick="return confirm
				(\'Deseja excluir os dados da Anamnese ?\')">E</a>';
				echo '</td>';

			}
			echo '</tr>';
			echo '</table>';	
		mysqli_close($conn);
		}
	?>
</body>
</html>
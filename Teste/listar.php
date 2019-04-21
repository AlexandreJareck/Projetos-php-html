<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<title>Visualizar de Anamnese </title>
</head>
<body class="container">
	<br>
	<h4 class="text-center">Visualizar de Anamneses</h4><br>
	<?php 
		include 'conn.php';
		//criar comando sql
		if (!empty($_GET['id'])){

			$id = $_GET['id'];

			$sql = "SELECT * FROM tb_anamnese WHERE id = " . $id;

			$resultado = mysqli_query($conn, $sql);

			if(mysqli_affected_rows($conn) > 0){
				
				$registro = array();

				echo '<table class ="table table-striped">' ;

				echo '<tr>';
					echo '<th>Código   </th>';
					echo '<th>Anamnese   </th>';
					echo '<th>Resposta   </th>';
				echo '</tr>';

				while ($registros = mysqli_fetch_assoc($resultado)){
					echo '<tr>';
					foreach($registros as $indice => $valor){
						echo  "<td> " . $valor . '</td>';
					}
					echo '</tr>';

				}

				echo '</table>';
					// fecha a conexão 
					mysqli_close($conn);
			}else if(mysqli_affected_rows($conn)==0){
				echo '<h3 class="text-warning">Não há dados cadastrados ainda!</h3>';
			}else{
				echo '<h3 class="text-danger">Erro ao buscar dados na tabela<br>
				Detalhe do erro: ' . mysqli_error($conn) .'</h3>';
			}

		}
	?>
	<a href="index.php" class="btn btn-outline-primary text-center">Voltar</a>
</body>
</html>
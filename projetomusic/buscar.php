<?php include 'func.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<title>Pesquisar</title>
</head>
<body class="container">
<?php 

	include 'conn.php';
	
	

	if(!empty($_POST['palavra']))
	{
		$palavra = $_POST['palavra'];

		$sql = "SELECT id_musica, musica, banda, genero, tempo FROM tb_musica WHERE musica LIKE '%".$palavra."%' ORDER BY musica";
		
		
		$resultado = mysqli_query($conn,$sql);
			if(mysqli_affected_rows($conn) > 0){
				$musica = array();
			
				echo '<table class="table table-hover table-sm ">';
				echo '<thead class="thead-dark">';
				echo '<tr>';
					echo '<th>ID</th>';
					echo '<th>Track</th>';
					echo '<th>DJ</th>';
					echo '<th>Genero</th>';
					echo '<th>Tempo</th>';
				echo '<tr>';
				echo '</thead>';
				while ($musica = mysqli_fetch_assoc($resultado)) {
					echo '<tr>';
					foreach ($musica as $coluna_atual => $valor_atual) {
						if($coluna_atual == 'id_musica'){
							
							$id_musica = $valor_atual;
						}
						echo '<td>'.$valor_atual.'</td>';

					}
					echo '</tr>';
				}
				echo '</table>';
			}
			else{
			echo '<h3 class="alert alert-info">Música não encontrada</h3>';
				
			}
		}
		else
		{
			echo '<h3 class="alert alert-warning">Preencha o campo de busca</h3>';
		}
?>
	<a href="form_buscar.php" class="nav-link">Voltar</a>	
</body>
</html>
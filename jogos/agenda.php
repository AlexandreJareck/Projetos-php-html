<?php include 'lock.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<title>Meus Jogos</title>
</head>
<body class="container">

	<?php 
	
	// inclui dependências
	include 'menu.php'; 
	include 'func.php';
	include 'conn.php';

	// chama função que verifica se há parâmetro 'msg' recebido nesta página
	verificar_msg();

	?>

	<!-- Button trigger modal -->
	<h3 class="text-primary">Jogos de <b><?php echo $_SESSION['usuario']; ?></b> - 
		<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#formModalCenter">
		Novo Jogo
	</button>
	</h3>

	<!-- Modal -->
	<div class="modal fade" id="formModalCenter" tabindex="-1" role="dialog" aria-labelledby="formModalCenterTitle" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="formModalCenterTitle">Novo Jogo</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <?php include 'form_jogo.php'; ?>
	      </div>
	    </div>
	  </div>
	</div>

	<?php

	$id_usuario = $_SESSION['id_usuario'];

	if($id_usuario == 10)
	{
		$sql = "SELECT id_jogo, jogo, categoria, data, desenvolvedora FROM tb_jogo";
	}
	else
	{
		$sql = "SELECT id_jogo, jogo, categoria, data, desenvolvedora FROM
			tb_jogo INNER JOIN tb_usuario ON tb_jogo.id_usuario = tb_usuario.id_usuario WHERE tb_jogo.id_usuario = $id_usuario";
	}

	// cria comando sql:
	

	// executa comando sql
	$resultado = mysqli_query($conn, $sql);

	if(mysqli_affected_rows($conn) > 0)
	{
		$jogo = array(); // prepara um array 

		
		// encapsulando o a tabela num formulário para poder excluir vários registros simultaneamente:
		echo '<form action="deletar.php" method="post">';
		// montagem do cabeçalho da tabela:
		echo '<table class="table table-hover table-bordered">';
		echo '<tr>';
		echo '<th>Jogo #</th>';
		echo '<th>Nome</th>';
		echo '<th>Categoria</th>';
		echo '<th>Data</th>';
		echo '<th>Desenvolvedora</th>';
		echo '<th colspan="2" class="text-center">Ações</th>';
		echo '</tr>';

		// enquanto houverem registros armazenados em 'resultado',
		// transforme cada linha do resultado em um array associativo:
		while ($jogo = mysqli_fetch_assoc($resultado)) 
		{
			
			// proxima linha da tabela:
			echo '<tr>';
			// foreach abaixo irá percorrer a linha atual gerada pelo
			// arra associativo acima, e mostrará o valor de cada valor
			// na tela, um por vez
			foreach ($jogo as $coluna_atual => $valor_atual) 
			{
				// ao mostrar os valores da linha atual do array 'encomendas',
				// quero que eles seam exibidos dentro de uma coluna da tabela:
				
				if($coluna_atual == 'id_jogo')
				{
					$id_jogo = $valor_atual;
				}
				else if($coluna_atual == 'data')

				{
					$data = $valor_atual;
					//$valor_atual =  number_format($data, 2,',', '.'); 
				}
					
				echo '<td>' . $valor_atual . '</td>';

			}

			echo '<td class="text-center"><a href="editar.php?id_jogo='.$id_jogo.'" class="btn btn-warning">Editar</a></td>';

			echo '<td class="text-center"><a href="deletar.php?id_jogo='.$id_jogo.'" class="btn btn-danger" onClick="return confirm(\'Deseja excluir este registro?\')">Deletar</a>';
			
			echo ' <input type="checkbox" name="selecionado[]" value="'.$id_jogo.'"></td>';


			echo '</tr>'; // ao sair do foreach, fecho a linha da tabela
		}
		echo '</table>'; // ao sair do 'while', significa que não há mais registros para exibir. Então fecho a tabela
		echo '<button type="submit" class="btn btn-danger" onClick="return confirm (\'Deseja excluir todos os selecionados?\')">
				Deletar Selecionados
			  </button>';

		echo '</form>';


	}
	else
	{
		echo '<h3 class="alert alert-info">Não existe nenhum jogo cadastrado!</h3>';
	}


	?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>
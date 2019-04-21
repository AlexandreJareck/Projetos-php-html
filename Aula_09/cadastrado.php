<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<title>Aula 09 - Cadastrado</title>
</head>
<body class="container">

	<?php 
	include 'menu.php';

		if(isset($_POST['btn-cadastrar']) && 
			!empty($_POST['nome']) && 
			!empty($_POST['fone']) && 
			!empty($_POST['email']) ){

			//receber os dados do form
			$nome = $_POST['nome'];
			$fone = $_POST['fone'];
			$email = $_POST['email'];

			//incluir arquivo de conexão
			 
			include 'conn.php';


			//criar comando sql
			$sql = "INSERT INTO tb_convidados (nome, fone, email) VALUES ('$nome', '$fone', '$email') ";


			// executar comando sql: 
			$resultado = mysqli_query( $sql);

			//verificar se o comando foi executado com sucesso 

			if($resultado){
				echo '<h3 class="text-success">Convidado cadastrado com sucesso!!</h3>';


			}else{
			echo '<h3 class="text-danger">Erro ao cadastrar convidado!</h3>';
			}	

		}else{
			echo '<h3 class="text-warning">Por favor, preencha o formulário de cadastro</h3><br>';
			include 'form_cadastro.php';
		}
	?>
	</body>
	</html>
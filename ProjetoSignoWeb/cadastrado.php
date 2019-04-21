<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	
	<title>Cadastrado</title>
</head>
<body class="container">

	<?php 
	include 'menu.php';

		if(isset($_POST['btn-cadastrar']) && 
			!empty($_POST['nome']) && 
			!empty($_POST['telefone']) && 
			!empty($_POST['email']) ){

			//receber os dados do form
			$nome = $_POST['nome'];
			$endereco = $_POST['endereco'];
			$bairro = $_POST['bairro'];
			$cep = $_POST['cep'];
			$cidade = $_POST['cidade'];
			$uf = $_POST['uf'];
			$email = $_POST['email'];
			$telefone = $_POST['telefone'];

			//incluir arquivo de conexão
			 
			include 'conn.php';


			//criar comando sql
			$sql = "INSERT INTO usuario (nome, endereco, bairro, cep, cidade, uf, email, telefone) VALUES ('$nome',
			'$endereco', '$bairro', '$cep', '$cidade', '$uf', '$email', '$telefone') ";


			// executar comando sql: 
			$resultado = mysqli_query($conn, $sql);

			//verificar se o comando foi executado com sucesso 

			if($resultado){
				echo '<h3>Cliente cadastrado com sucesso!!</h3>';

				
			}else{
			echo '<h3>Erro ao cadastrar cliente!</h3>';
			}	

		}else{
			echo '<h3>Por favor, preencha o formulário de cadastro</h3><br>';
			include 'form_cadastro.php';
		}
	?>
	</body>
	</html>
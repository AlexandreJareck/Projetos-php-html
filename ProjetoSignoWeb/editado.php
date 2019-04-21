<?php
	if (!empty($_POST['nome']) && !empty($_POST['telefone']) && !empty($_POST['email'])) {
			
			$id = $_POST['id'];
			$nome = $_POST['nome'];
			$endereco = $_POST['endereco'];
			$bairro = $_POST['bairro'];
			$cep = $_POST['cep'];
			$cidade = $_POST['cidade'];
			$uf = $_POST['uf'];
			$email = $_POST['email'];
			$telefone = $_POST['telefone'];

			$sql = "UPDATE usuario SET nome = '$nome', endereco = '$endereco', bairro = '$bairro', cep = '$cep', cidade = '$cidade' , uf = '$uf', email = '$email', telefone = '$telefone' WHERE id = '$id'";


			include 'conn.php';

			$resultado = mysqli_query($conn, $sql);

			if ($resultado) {
				header('Location:gerenciar.php?msg=edtSuccess');
			}else{
				header('Location:gerenciar.php?msg=edtError1');
			}
	}else{
		//redirecionar para gerenciar
		header('Location:gerenciar.php?msg=edtErro2');
	}

?>
<?php
	if (!empty($_POST['id']) && !empty($_POST['nome']) && !empty($_POST['fone']) && !empty($_POST['email'])) {
			
			$id = $_POST['id'];
			$nome = $_POST['nome'];
			$fone = $_POST['fone'];
			$email = $_POST['email'];

			$sql = "UPDATE tb_convidados SET nome = '$nome', fone = '$fone' , email = '$email' WHERE id = '$id'";


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
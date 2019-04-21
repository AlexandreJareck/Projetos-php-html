<?php
	include 'conn.php';
	if(  empty($_POST['anamnese']) && empty($_POST['resposta'])){
		header('location:cadastrar_anamnese.php?msg=errorEmpty');
	}else{
		
		$anamnese = $_POST['anamnese'];
		$resposta = $_POST['resposta'];

		$sql = "SELECT * FROM tb_anamnese WHERE id LIKE '$id'";

		$resultado = mysqli_query($conn, $sql);
			if(mysqli_affected_rows($conn) > 0){
				header('location:cadastrar_anamnese.php?msg=errorUser');
			}else{
				$sql = "INSERT INTO tb_anamnese (anamnese, resposta) VALUES ('$anamnese', '$resposta') ";
				$resultado = mysqli_query($conn, $sql);

					if(mysqli_affected_rows($conn) > 0){
						header('location:index.php');
					}else{
						header('location:cadastrar_anamnese.php?msg=errorCad');
					}
			}		
		
	}
?>
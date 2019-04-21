<?php 

	if(!empty($_POST['anamnese'])&&	!empty($_POST['resposta'])&& !empty($_POST['id'])){
		$anamnese = $_POST['anamnese'];
		$resposta = $_POST['resposta'];
		$id = $_POST['id'];

		$sql = "UPDATE tb_anamnese SET anamnese = '$anamnese', resposta = '$resposta' WHERE id = $id ";
		include 'conn.php';

		$resultado = mysqli_query($conn,$sql);
	
		if($resultado){
			header('location:index.php?msg=edtSuccess');
		}else{
			header('location:index.php?msg=edtError2');
		}
	}
	else{
		header('location:index.php?msg=edtError1');
	}

?>
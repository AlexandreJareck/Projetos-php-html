<?php

	if(!empty($_GET['id'])){
		$id = $_GET['id'];
		include 'conn.php';
		$sql = "DELETE FROM tb_anamnese WHERE id = "  . $id;

		$resultado = mysqli_query($conn, $sql);

		if($resultado){
			header('location:index.php?msg=delSuccess');
		}else{
			header('location:index.php?msg=delError2');
		}
	}else{
		header('location:index.php?msg=delError1');
	}

?>
<?php 

	if(!empty($_POST['marca'])&&
		!empty($_POST['cor'])&&
		!empty($_POST['ram'])&&
	   !empty($_POST['proc'])&&
	   !empty($_POST['hd'])&&
	   !empty($_POST['id']) )
	{
		$marca = $_POST['marca'];
		$cor = $_POST['cor'];
		$ram = $_POST['ram'];
		$proc = $_POST['proc'];
		$hd = $_POST['hd'];
		$id = $_POST['id'];

		$sql = "UPDATE tb_notes SET marca = '$marca', cor = '$cor', ram = '$ram' , proc = '$proc' , hd = '$hd'  WHERE id = $id ";
		include 'conn.php';

		$resultado = mysqli_query($conn,$sql);
	
		if($resultado)
		{
			header('location:gerenciar.php?msg=edtSuccess');
		}
		else
		{
			header('location:gerenciar.php?msg=edtError2');
		}
	}
	else
	{
		header('location:gerenciar.php?msg=edtError1');
	}

?>
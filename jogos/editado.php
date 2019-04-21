<?php 

	if(!empty($_POST['jogo'])&&
	   !empty($_POST['categoria'])&&
	   !empty($_POST['data'])&&
	   !empty($_POST['desenvolvedora'])&&
	   !empty($_POST['id_jogo']) )
	{
		$jogo = $_POST['jogo'];
		$categoria = $_POST['categoria'];
		$data = $_POST['data'];
		$desenvolvedora = $_POST['desenvolvedora'];
		$id = $_POST['id_evento'];
		/*$sql = "SELECT id evento WHERE $id_usuario = $_SESSION['id_usuario']";*/
		$sql = "SELECT id jogo WHERE $id_usuario = id_usuario INNER JOIN,  UPDATE tb_jogo SET jogo = '$jogo', categoria = '$categoria', data = '$data',  desenvolvedora = '$desenvolvedora',  WHERE
		id_jogo = $id ";
		include 'conn.php';

		$resultado = mysqli_query($conn,$sql);
	
		if($resultado)
		{
			header('location:agenda.php.php?msg=edtSuccess');
		}
		else
		{
			header('location:agenda.php?msg=edtError2');
		}
	}
	else
	{
		header('location:agenda.php?msg=edtError1');
	}

?>

<?php

	if(!empty($_GET['id']))
	{
		$id = $_GET['id'];
		include 'conn.php';
		$sql = "DELETE FROM tb_notes WHERE id = "  . $id;

		$resultado = mysqli_query($conn, $sql);

		if($resultado)
		{
			header('location:gerenciar.php?msg=delSuccess');
		}
		else
		{
			header('location:gerenciar.php?msg=delError2');
		}
	}
	else // se não devolver o usuario para pagina principal.
	{
		// PARA REDIMENSIONAR
		header('location:gerenciar.php?msg=delError1');
	}

?>
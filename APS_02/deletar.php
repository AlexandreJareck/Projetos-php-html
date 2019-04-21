
<?php

	if(!empty($_GET['id_evento']))
	{
		$id_evento = $_GET['id_evento'];
		include 'conn.php';
		$sql = "DELETE FROM tb_evento WHERE id_evento = "  . $id_evento;

		$resultado = mysqli_query($conn, $sql);

		if($resultado)
		{
			header('location:agenda.php?msg=delSuccess');
		}
		else
		{
			header('location:agenda.php?msg=delError2');
		}
	}
	else // se não devolver o usuario para pagina principal.
	{
		// PARA REDIMENSIONAR
		header('location:agenda.php?msg=delError1');
	}

?>
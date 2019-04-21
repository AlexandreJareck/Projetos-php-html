<?php
     include 'agenda.php';
	if(!empty($_GET['id_jogo']))
	{
		$id = $_GET['id_jogo'];
		$sql = "DELETE FROM tb_jogo WHERE id_jogo = "  . $id;

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
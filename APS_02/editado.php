<?php 

	if(!empty($_POST['evento']) && !empty($_POST['prioridade']) && !empty($_POST['data']))
	{
		$evento		= $_POST['evento'];
		$prioridade = $_POST['prioridade'];
		$data 		= $_POST['data'];
		$id_evento	= $_POST['id_evento'];

		$sql = "UPDATE tb_evento
				SET evento = '$evento', prioridade = '$prioridade', data = '$data'
				WHERE id_evento = $id_evento";

		include 'conn.php';

		$resultado = mysqli_query($conn, $sql);

		if($resultado)
		{
			header('location:agenda.php?msg=eventoEdit');
		}
		else
		{
			header('location:agenda.php?msg=eventoError1');
		}
	}
	else
	{
		header('location:agenda.php?msg=eventoError2');
	}

?>
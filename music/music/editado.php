<?php 

	if(!empty($_POST['musica']) && 
		!empty($_POST['banda']) && 
		!empty($_POST['genero']) && 
		!empty($_POST['tempo']) )
	{
		$musica		= $_POST['musica'];
		$banda      = $_POST['banda'];
		$genero 	= $_POST['genero'];
		$tempo 		= $_POST['tempo'];
		$id_musica	= $_POST['id_musica'];

		$sql = "UPDATE tb_musica
				SET musica = '$musica', banda = '$banda', genero = '$genero'
				, tempo = '$tempo'
				WHERE id_musica = $id_musica";

		include 'conn.php';

		$resultado = mysqli_query($conn, $sql);

		if($resultado)
		{
			header('location:musicas.php?msg=eventoEdit');
		}
		else
		{
			header('location:musicas.php?msg=eventoError1');
		}
	}
	else
	{
		header('location:musicas.php?msg=eventoError2');
	}

?>
<?php  include 'lock.php';
	include 'func.php';
	include 'conn.php';

	validar_form_encomenda();	

	$musica 	    = $_POST['musica'];
	$banda      = $_POST['banda'];
	$genero = $_POST['genero'];
	$tempo = $_POST['tempo'];
	$id_musica = $_SESSION['id_musica'];

	$sql = "INSERT INTO tb_musica (musica, banda, genero,tempo ,id_musica) 
	VALUES ('$musica', '$banda', '$genero', '$tempo' ,$id_musica)";

	$resultado = mysqli_query($conn, $sql);

	if (mysqli_affected_rows($conn) > 0)
	{
		header('location:musicas.php?msg=eventoCad');
	}
	else
	{
		header('location:musicas.php?msg=eventoError');
	}
?>
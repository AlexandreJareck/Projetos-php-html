<?php  include 'lock.php';
	include 'func.php';
	include 'conn.php';

	//validar_form_musica();	

	$musica 	= $_POST['musica'];
	$banda      = $_POST['banda'];
	$genero 	= $_POST['genero'];
	$tempo 		= $_POST['tempo'];
	$id_usuario  = $_SESSION['id_usuario'];

	$sql = "INSERT INTO tb_musica (musica, banda, genero, tempo ,id_usuario) 
	VALUES ('$musica', '$banda', '$genero', '$tempo', $id_usuario)";

	$resultado = mysqli_query($conn, $sql);

	if (mysqli_affected_rows($conn) > 0)
	{
		header('location:musicas.php?msg=musicaCad');
	}
	else
	{
		header('location:musicas.php?msg=musicaError');
	}
?>
<?php  include 'lock.php';
	include 'func.php';
	include 'conn.php';

	validar_form_jogo();	

	$jogo 	        = $_POST['jogo'];
	$categoria      = $_POST['categoria'];
	$data 		    = $_POST['data'];
	$desenvolvedora = $_POST['desenvolvedora'];
	$id_usuario     = $_SESSION['id_usuario'];

	$sql = "INSERT INTO tb_jogo (jogo, categoria, data, desenvolvedora, id_usuario) 
	VALUES ('$jogo', '$categoria', '$data', '$desenvolvedora', '$id_usuario')";

	$resultado = mysqli_query($conn, $sql);

	if (mysqli_affected_rows($conn) > 0)
	{
		header('location:agenda.php?msg=jogoCad');
	}
	else
	{
		header('location:agenda.php?msg=jogoError');
	}
?>
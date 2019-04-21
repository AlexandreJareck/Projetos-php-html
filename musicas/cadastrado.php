<?php 

	include 'func.php';

	validar_form_cad();

	$usuario = $_POST['usuario'];
	$email   = $_POST['email'];
	$aux = $_POST['senha'];

	$senha   = md5($aux);
	

	include 'conn.php';

	$sql = "INSERT INTO tb_usuario (usuario, email, senha) 
	VALUES ('$usuario', '$email', '$senha') ";

	$resultado = mysqli_query($conn, $sql);

	if(mysqli_affected_rows($conn) > 0)
	{
		header('location:login.php?msg=cadSuccess');
	}
	else
	{
		header('location:cad_usuario.php?msg=cadError');
	}

?>
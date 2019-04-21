<?php 

	include 'conn.php';
	include 'func.php';

	// chamar função para validação de formulário:
	validar_cad_user();

	$usuario = $_POST['usuario'];
	$senha   = $_POST['senha'];
	$email   = $_POST['email'];

	validar_cad_existente($usuario, $email, $conn);


	$sql = "INSERT INTO tb_usuarios (usuario, senha, email) VALUES ('$usuario', '$senha', '$email')";

	$resultado = mysqli_query($conn, $sql);

	if(mysqli_affected_rows($conn) > 0)
	{
		header('location:login.php?msg=cadSuccess');
	}
	else
	{
		header('location:cadastrar_user.php?msg=cadError');
	}

?>
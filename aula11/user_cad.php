<?php 

if(empty($_POST['usuario']) || empty($_POST) || empty($_POST['email']))
{
	header('location:cadastrar_user.php?msg=errorEmpty');
}
else
{
	$usuario = $_POST['usuario'];
	$senha = $_POST['senha'];
	$email = $_POST['email'];

	include 'conn.php';

	$sql = "SELECT usuario FROM tb_usuarios WHERE usuario LIKE '$usuario'";

	$resultado = mysqli_query($conn, $sql);

	if(mysqli_affected_rows($conn) > 0)

	{
		header('location:cadastrar_user.php?msg=errorUser');
	}
	else
	{
		$sql = "SELECT email FROM tb_usuarios WHERE email LIKE '$email'";

		$resultado = mysqli_query($conn, $sql);

		if(mysqli_affected_rows($conn) > 0)
		{
			header('location:cadastrar_user.php?msg=errorEmail');
		}
		else
		{
			$sql = "INSERT INTO tb_usuarios (usuario, senha, email) VALUES('$usuario', '$senha', '$email')";

			$resultado = mysqli_query($conn, $sql);

			if(mysqli_affected_rows($conn) > 0 )
			{
				header('location:login.php?msg=cadSuccess');

			}
			else
			{
				header('location:cadastrar_user.php?msg=errorCad');
			}
		}
	}
}

?>
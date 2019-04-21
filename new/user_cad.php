<?php 

if(empty($_POST['cpf']) || empty($_POST) || empty($_POST['email']))
{
	header('location:cadastrar_user.php?msg=errorEmpty');
}
else
{
	$cpf = $_POST['cpf'];
	$senha = $_POST['senha'];
	$email = $_POST['email'];

	include 'conn.php';

	$sql = "SELECT cpf FROM tb_cliente WHERE cpf LIKE '$cpf'";

	$resultado = mysqli_query($conn, $sql);

	if(mysqli_affected_rows($conn) > 0)

	{
		header('location:cadastrar_user.php?msg=errorUser');
	}
	else
	{
		$sql = "SELECT email FROM tb_cliente WHERE email LIKE '$email'";

		$resultado = mysqli_query($conn, $sql);

		if(mysqli_affected_rows($conn) > 0)
		{
			header('location:cadastrar_user.php?msg=errorEmail');
		}
		else
		{
			$sql = "INSERT INTO tb_cliente (cpf, senha, email) VALUES('$cpf', '$senha', '$email')";

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
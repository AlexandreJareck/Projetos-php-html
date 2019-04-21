<?php include 'lock.php';

if(empty($_POST['usuario']) || empty($_POST['senha']) || empty($_POST['email']) )
{
	header('location:perfil.php');
}
else
{
	$usuario = $_POST['usuario'];
	$senha   = $_POST['senha'];
	$email   = $_POST['email'];

	$id  = $_SESSION['id'];

	include 'conn.php';

	$sql = "SELECT usuario, email FROM tb_usuarios WHERE 
	(usuario LIKE '$usuario' OR email LIKE '$email') AND id != $id ";

	$resultado = mysqli_query($conn, $sql);

	if(mysqli_affected_rows($conn) > 0)
	{
		header('location:perfil.php?msg=edtInvalid');
	}
	else
	{

		$sql = "UPDATE tb_usuarios SET usuario = '$usuario', senha = '$senha', email = '$email' 
		WHERE id = $id";

		$resultado = mysqli_query($conn, $sql);

		if(mysqli_affected_rows($conn) > 0)
		{
			$_SESSION['usuario'] = $usuario;
			$_SESSION['senha']   = $senha;
			$_SESSION['email']   = $email;

			header('location:perfil.php?msg=userUpdated');
		}
		else
		{
			header('location:perfil.php?msg=errorUpdate');
			//echo mysqli_error($conn);
		}
	}
}


?>
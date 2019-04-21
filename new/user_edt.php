<?php include 'lock.php';

if(empty($_POST['cpf']) || empty($_POST['senha']) || empty($_POST['email']) )
{
	header('location:perfil.php');
}
else
{
	$cpf = $_POST['cpf'];
	$senha   = $_POST['senha'];
	$email   = $_POST['email'];

	$id  = $_SESSION['id'];

	include 'conn.php';

	$sql = "SELECT cpf, email FROM tb_cliente WHERE 
	(cpf LIKE '$cpf' OR email LIKE '$email') AND id != $id ";

	$resultado = mysqli_query($conn, $sql);

	if(mysqli_affected_rows($conn) > 0)
	{
		header('location:perfil.php?msg=edtInvalid');
	}
	else
	{

		$sql = "UPDATE tb_cliente SET cpf = '$cpf', senha = '$senha', email = '$email' 
		WHERE id = $id";

		$resultado = mysqli_query($conn, $sql);

		if(mysqli_affected_rows($conn) > 0)
		{
			$_SESSION['cpf'] = $cpf;
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
<?php  

if(empty($_POST['usuario']) || empty($_POST['senha']))
{
	header('location:login.php?msg=errorEmpty');
}
else if (!empty($_POST['usuario']) && !empty($_POST['senha']))
{
	$usuario = $_POST['usuario'];
	$senha   = $_POST['senha'];

	include 'conn.php';

	$sql = "SELECT usuario, senha FROM tb_adms WHERE
	usuario LIKE '$usuario' AND
	senha LIKE '$senha' ";


	$resultado = mysqli_query($conn, $sql);

	if(mysqli_affected_rows($conn) > 0)
	{
		$login = mysqli_fetch_assoc($resultado);

		session_start();
		$_SESSION['usuario']  = $login['usuario'];
		$_SESSION['senha'] 	  = $login['senha'];
		header('location:index.php');
	}
	else
	{
		header('location:login.php?msg=errorInvalid');
	}

}
else if(empty($_POST['cpf']) || empty($_POST['senha']))
{
	header('location:login.php?msg=errorEmpty');
}
else
{
	$cpf = $_POST['cpf'];
	$senha   = $_POST['senha'];

	

	$sql1 = "SELECT id, cpf, senha, email FROM tb_cliente WHERE
	(usuario LIKE '$usuario' OR email LIKE '$usuario') AND
	senha LIKE '$senha' ";

	$resultado1 = mysqli_query($conn, $sql1);

	if(mysqli_affected_rows($conn) > 0)
	{
		$login1 = mysqli_fetch_assoc($resultado1);

		session_start();
		$_SESSION['id'] 	 = $login1['id'];
		$_SESSION['email'] 	 = $login1['email'];
		$_SESSION['cpf'] = $login1['cpf'];
		$_SESSION['senha']   = $login1['senha'];
		header('location:produtos.php');
	}
	else
	{
		header('location:login.php?msg=errorInvalid');
	}

}

?>
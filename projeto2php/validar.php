<?php  

if(empty($_POST['usuario']) || empty($_POST['senha']))
{
	header('location:login.php?msg=errorEmpty');
}
else
{
	$usuario = $_POST['usuario'];
	$senha   = $_POST['senha'];

	include 'conn.php';

	$sql = "SELECT usuario, senha, email FROM tb_adms WHERE
	(usuario LIKE '$usuario' OR email LIKE '$usuario') AND
	senha LIKE '$senha' ";

	$resultado = mysqli_query($conn, $sql);

	if(mysqli_affected_rows($conn) > 0)
	{
		$login = mysqli_fetch_assoc($resultado);

		session_start();
		$_SESSION['usuario'] 	 = $login['usuario'];
		$_SESSION['senha'] 	 = $login['senha'];
		header('location:listar.php');
	}
	else
	{
		header('location:login.php?msg=errorInvalid');
	}

}

?>
<?php include 'lock.php';

include 'conn.php';

if(!empty($_POST['selecionado']))
{
	$selecionados = $_POST['selecionado'];

	$ids = implode(",", $selecionados);

	$sql = "DELETE FROM t_flor WHERE id_flor IN ($ids)";

	$resultado = mysqli_query($conn, $sql);

	if(mysqli_affected_rows($conn) > 0)
	{
		header('location:encomenda.php?msg=delSuccess');
	}
	else
	{
		header('location:encomenda.php?msg=delError');
	}

}
else if(empty($_GET['id_flor']))
{
	header('location:encomenda.php?msg=emptyValue');
}
else
{
	$id_flor = $_GET['id_flor'];
	
	$sql = "DELETE FROM t_flor WHERE id_flor = $id_flor";

	$resultado = mysqli_query($conn, $sql);

	if(mysqli_affected_rows($conn) > 0)
	{
		header('location:encomenda.php?msg=delSuccess');
	}
	else
	{
		header('location:encomenda.php?msg=delError1');
	}

}



?>
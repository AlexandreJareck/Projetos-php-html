<?php   include 'lock.php';

include 'conn.php';

if(!empty($_POST['selecionado']))
{
	$selecionados = $_POST['selecionado'];

	$ids = implode(",", $selecionados);

	$sql = "DELETE FROM tb_musica WHERE id_musica IN ($ids)";

	$resultado = mysqli_query($conn, $sql);

	if(mysqli_affected_rows($conn) > 0)
	{
		header('location:musicas.php?msg=delSuccess');
	}
	else
	{
		header('location:musicas.php?msg=delError');
	}

}
else if(empty($_GET['id_musica']))
{
	header('location:musicas.php?msg=emptyValue');
}
else
{
	$id_musica = $_GET['id_musica'];
	
	$sql = "DELETE FROM tb_musica WHERE id_musica = $id_musica";

	$resultado = mysqli_query($conn, $sql);

	if(mysqli_affected_rows($conn) > 0)
	{
		header('location:musicas.php?msg=delSuccess');
	}
	else
	{
		header('location:musicas.php?msg=delError');
	}

}



?>
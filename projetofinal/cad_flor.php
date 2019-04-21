<?php  include 'lock.php';
	include 'func.php';
	include 'conn.php';

	validar_form_encomenda();	

	$nome 	    = $_POST['nome'];
	$preco      = $_POST['preco'];
	$quantidade = $_POST['quantidade'];
	$id_usuario = $_SESSION['id_usuario'];

	$sql = "INSERT INTO t_flor (nome, preco, quantidade, id_usuario) 
	VALUES ('$nome', '$preco', '$quantidade', $id_usuario)";

	$resultado = mysqli_query($conn, $sql);

	if (mysqli_affected_rows($conn) > 0)
	{
		header('location:encomenda.php?msg=eventoCad');
	}
	else
	{
		header('location:encomenda.php?msg=eventoError');
	}
?>
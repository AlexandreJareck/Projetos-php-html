<?php 

	if(!empty($_POST['nome']) && !empty($_POST['preco']) && !empty($_POST['quantidade']))
	{
		$nome		= $_POST['nome'];
		$preco      = $_POST['preco'];
		$quantidade = $_POST['quantidade'];
		$id_flor	= $_POST['id_flor'];

		$sql = "UPDATE t_flor
				SET nome = '$nome', preco = '$preco', quantidade = '$quantidade'
				WHERE id_flor = $id_flor";

		include 'conn.php';

		$resultado = mysqli_query($conn, $sql);

		if($resultado)
		{
			header('location:encomenda.php?msg=eventoEdit');
		}
		else
		{
			header('location:encomenda.php?msg=eventoError1');
		}
	}
	else
	{
		header('location:encomenda.php?msg=eventoError2');
	}

?>
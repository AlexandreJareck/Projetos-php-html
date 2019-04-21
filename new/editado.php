<?php 

	if(!empty($_POST['nome'])&&
		!empty($_POST['preco'])&&
		!empty($_POST['qtd'])&&
	   !empty($_POST['qtd_estoque'])&&
	   !empty($_POST['id']) )
	{
		$nome = $_POST['nome'];
		$preco = $_POST['preco'];
		$qtd = $_POST['qtd'];
		$qtd_estoque = $_POST['qtd_estoque'];
		$id = $_POST['id'];

		$sql = "UPDATE tb_adm SET nome = '$nome', preco = '$preco', qtd = '$qtd' , qtd_estoque = '$qtd_estoque'  WHERE id = $id ";
		include 'conn.php';

		$resultado = mysqli_query($conn,$sql);
	
		if($resultado)
		{
			header('location:gerenciar.php?msg=edtSuccess');
		}
		else
		{
			header('location:gerenciar.php?msg=edtError2');
		}
	}
	else
	{
		header('location:gerenciar.php?msg=edtError1');
	}

?>
<?php include 'lock.php';?>
<?php
	if(  empty($_POST['nome']) ||
	 	 empty($_POST['preco'])   || 
		 empty($_POST['qtd']) )
	{
		header('location:cadastrar_flor.php?msg=errorEmpty');
	}else{
		
		$nome = $_POST['nome'];
		$preco = $_POST['preco'];
		$qtd = $_POST['qtd'];
		$qtd_estoque = $_POST['qtd'];

		include 'conn.php';

		$sql = "SELECT * FROM tb_adm WHERE id LIKE '$id'";

		$resultado = mysqli_query($conn, $sql);
			if(mysqli_affected_rows($conn) > 0){
				header('location:cadastrar_flor.php?msg=errorUser');
			}else{
				$sql = "INSERT INTO tb_adm (nome, preco, qtd, qtd_estoque) VALUES ('$nome', '$preco', '$qtd', '$qtd') ";
				$resultado = mysqli_query($conn, $sql);

					if(mysqli_affected_rows($conn) > 0){
						header('location:cadastrar_flor.php?msg=cadSuccess');
					}else{
						header('location:cadastrar_flor.php?msg=errorCad');
						}
			}		
		
	}

?>
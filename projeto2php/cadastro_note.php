<?php include 'lock.php';?>
<?php
	if(  empty($_POST['marca']) ||
	 	 empty($_POST['cor'])   || 
		 empty($_POST['ram'])   || 
	 	 empty($_POST['proc'])  ||
	 	 empty($_POST['hd'])){
		header('location:cadastrar_note.php?msg=errorEmpty');
	}else{
		
		$marca = $_POST['marca'];
		$cor = $_POST['cor'];
		$ram = $_POST['ram'];
		$proc = $_POST['proc'];
		$hd = $_POST['hd'];

		include 'conn.php';

		$sql = "SELECT * FROM tb_notes WHERE id LIKE '$id'";

		$resultado = mysqli_query($conn, $sql);
			if(mysqli_affected_rows($conn) > 0){
				header('location:cadastrar_note.php?msg=errorUser');
			}else{
				$sql = "INSERT INTO tb_notes (marca, cor, ram, proc, hd) VALUES ('$marca', '$cor', '$ram' , '$proc', '$hd') ";
				$resultado = mysqli_query($conn, $sql);

					if(mysqli_affected_rows($conn) > 0){
						header('location:cadastrar_note.php?msg=cadSuccess');
					}else{
						header('location:cadastrar_note.php?msg=errorCad');
						}
			}		
		
	}

?>
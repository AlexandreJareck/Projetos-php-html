<?php 

	// abrindo conexão com o servidor
	$servidor   = "localhost";
	$usuario    = "root";
	$senha      = "";
	$banco      = "andes";
	$conecta    = mysqli_connect($servidor, $usuario, $senha, $banco);

	// testanto conexão
	if (mysqli_connect_errno() )
	{
		die("Conexão falhou: " . mysqli_connect_errno() );
	}

?>




<?php 

	mysqli_close($conecta);

?>
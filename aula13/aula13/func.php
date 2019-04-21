<?php  // arquivo para funções de validações diversas

// função para verificar se o formulário de cadastro de usuário está em branco:
function validar_cad_user()
{
	if( empty($_POST['usuario']) || 
		empty($_POST['senha'])   || 
		empty($_POST['email']) )
	{
		header('location:cadastrar_user.php?msg=emptyFields');
		exit;
	}
}

// validar se ja existe cadastro com os dados informados
function validar_cad_existente($usuario, $email, $conn)
{
	$sql = "SELECT usuario, email FROM tb_usuarios WHERE usuario LIKE '$usuario' OR email LIKE '$email' ";

	$resultado = mysqli_query($conn, $sql);

	if(mysqli_affected_rows($conn) > 0)
	{
		header('location:cadastrar_user.php?msg=cadExistente');
		exit;
	}
}

// validar parâmetro 'msg'
function validar_msg()
{
	if (!empty($_GET['msg']))
	{
		$msg = $_GET['msg'];

		if($msg == 'emptyFields')
		{
			echo '<h3 class="alert alert-warning">ATENÇÃO: preencha todos os campos abaixo.</h3><br>';
		}
		else if($msg == 'cadExistente')
		{
			echo '<h3 class="alert alert-warning">ATENÇÃO: Usuário ou email já cadastrados no sistema.</h3><br>';
		}
		else if($msg == 'cadSuccess')
		{
			echo '<h3 class="alert alert-success">Cadastrado com sucesso!<br>Efetue o login no form abaixo:</h3><br>';
		}
		else if($msg == 'cadError')
		{
			echo '<h3 class="alert alert-danger">ATENÇÃO: Não foi possível efetuar o cadastro.<br>Contate o suporte</h3><br>';
		}
		else if($msg == 'loginError')
		{
			echo '<h3 class="alert alert-danger">ATENÇÃO: Usuário ou senha inválidos. tente novamente!</h3><br>';
		}
	}

}


?>


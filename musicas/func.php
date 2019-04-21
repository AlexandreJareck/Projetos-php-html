<?php  

function validar_form_cad()
{

	if( empty($_POST['usuario']) || 
		 empty($_POST['email'])  ||
		 empty($_POST['senha']) ) 
	{
		header('location:cadastro.php?msg=emptyFields');
		exit;
	}
}

function validar_form_musica()
{
	if( empty($_POST['musica']) ||
		empty($_POST['tempo']) )
	{
		header('location:encomenda.php?msg=emptyFields');
		exit;
	}
}



function verificar_msg()
{
	if(!empty($_GET['msg']))
	{
		$msg = $_GET['msg'];

		if($msg == 'emptyFields')
		{
			echo '<h3 class="alert alert-warning">ATENÇÃO: Preencha todos os campos do formulário.</h3>';
		}
		else if($msg == 'cadSuccess')
		{
			echo '<h3 class="alert alert-success">Cadastro efetuado com sucesso!<br><p>Utilize o formulário abaixo para entrar no sistema:</p></h3>';
		}
		else if($msg == 'cadError')
		{
			echo '<h3 class="alert alert-danger">ATENÇÃO: usuário ou e-mail já cadastrados!<br><p>Tente novamente informando outros dados</p></h3>';
		}
		else if($msg == 'loginError')
		{
			echo '<h3 class="alert alert-warning">ATENÇÃO: usuário, e-mail ou senha inválidos!<br><p>Tente novamente</p></h3>';
		}
		else if($msg == 'eventoCad')
		{
			echo '<h3 class="alert alert-success">Encomenda cadastrada com sucesso!</h3>';
		}
		else if($msg == 'eventoError')
		{
			echo '<h3 class="alert alert-danger">ATENÇÃO: não foi possível cadastrar a encomenda.<br><p>Tente novamente</p></h3>';
		}
	}
}




?>
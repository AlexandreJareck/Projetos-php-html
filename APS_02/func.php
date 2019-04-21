<?php  

function validar_form_cad()
{

	if( empty($_POST['usuario']) || 
		empty($_POST['senha'])   || 
		empty($_POST['email']) ) 
	{
		header('location:cadastro.php?msg=emptyFields');
		exit;
	}
}



// nova função

function validar_form_evento()
{
	if(empty($_POST['evento'])||
		empty($_POST['data'])  )
	{
		header('location:agenda.php?msg=emptyFields');
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
		else if ($msg == 'eventoError')
		{
			echo '<h3 class="alert alert-danger">ATENÇÃO: não foi possivel cadastrar o evento.<br><p>Tente novamente</p></h3>';
		}
		else if ($msg == 'eventoCad')
		{	
			echo '<h3 class="alert alert-success">Evento cadastrado com Sucesso!!.</h3>';
		}
		else if($msg == 'eventoEdit')
		{
			echo '<h3 class="alert alert-success">Evento Editado com Sucesso!!.</h3>';
		}
		else if($msg == 'eventoError1')
		{
			echo '<h3 class="alert alert-danger">ATENÇÃO: não foi possivel editar o evento.<br><p>Tente novamente</p></h3>';
		}
		else if($msg == 'eventoError2')
		{
			echo '<h3 class="alert alert-warning">ATENÇÃO: Preencha todos os campos do formulário.</h3>';
		}
		else if($msg == 'delSuccess')
		{
			echo '<h3 class="alert alert-success">Evento Deletado !!.</h3>';
		}
		else if($msg == 'delError1')
		{
			echo '<h3 class="alert alert-danger">ATENÇÃO: não foi possivel deletar o evento.<br><p>Tente novamente</p></h3>';
		}
		else if($msg == 'delError2')
		{
			echo '<h3 class="alert alert-warning">ATENÇÃO: Efetue Login.</h3>';
		}


	}
}




?>
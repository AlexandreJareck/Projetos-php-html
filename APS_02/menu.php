<?php if(session_status() == PHP_SESSION_NONE)

{
	session_start();
}  
if(empty($_SESSION)) // se não houver sessão registrada	
{
	$itens = '	<li class="nav-item">
					<a href="cadastro.php" class="nav-link">Cadastre-se</a>
				</li>

				<li class="nav-item">
					<a href="login.php" class="nav-link">Entrar</a>
				</li> ' ;
}
else
{
	$itens = ' 	<li class="nav-item">
					<a href="agenda.php" class="nav-link">Minha Agenda</a>
				</li>

				<li class="nav-item">
					<a href="logout.php" class="nav-link">Sair</a>
				</li> ' ;
}
	

 ?>




<br>
<ul class="nav nav-tabs justify-content-end">
	<li class="nav-item">
		<a href="index.php"  class="nav-link">Home</a>
	</li>

	<?php echo $itens; ?>

</ul>
<br>
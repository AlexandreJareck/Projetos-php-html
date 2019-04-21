<?php
if(session_id() == '')
{// se não houver sessão ativa
	session_start(); // inicie sessão
}
if(empty($_SESSION))// se não houver sessão registrada
{ // usuário não está logado
	

	$itens = '<li class="nav-item">
		<a href="cadastro.php" class="nav-link">Cadastre-se</a>
	</li>';
}
else // senão
{// usuário está logado
	

	$itens = '<li class="nav-item">

			<a href="musicas.php" class="nav-link">Playlist</a>
			</li>
			<li class="nav-item">
			<li class="nav-item">
			<a href="form_buscar.php" class="nav-link">Buscar</a>
			</li>
			<a href="logout.php" class="nav-link">Sair</a>
			</li>';




}



?>


<br>
<ul class="nav">
	<li class="nav-item">
		<a href="index.php"  class="nav-link">Home</a>
	</li>
	<?php echo $itens; ?>
</ul>
<br>
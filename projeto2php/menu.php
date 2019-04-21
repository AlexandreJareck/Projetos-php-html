<?php 
	include 'conn.php';
	

?>




<?php if (session_status() == PHP_SESSION_NONE)
{ // senão há sessão ativa
	session_start(); // inicie sessão
}
// com a sessão iniciada, verifico se as variaveis de sessão está vazias
if(empty($_SESSION['usuario']) || 
   empty($_SESSION['senha']) )
{ // se isso for verdade, então não estopu logado.
	// nesse caso, o menu me apresentará opções diferentes:
	?>

<br>
<ul class="nav nav-tabs justify-content-end">
	<li class="nav-item">
		<a href="index.php" class="nav-link">Home</a>
	</li>
		<li class="nav-item">
		<a href="listar.php" class="nav-link">Listar</a>
	</li>

	<li class="nav-item">
		<a href="login.php" class="nav-link">Login</a>
	</li>
</ul>
<br>

<?php } else { // se as variaveis de sessão não estão vazias, significa que há usuário logado.
// Nesse caso, o menu será outro ?>

<br>
<ul class="nav nav-tabs justify-content-end">
	<li class="nav-item">
		<a href="index.php" class="nav-link">Home</a>
	</li>
	<li class="nav-item">
		<a href="cadastrar_note.php" class="nav-link"> Cadastrar Notebook </a>
	</li>

	</li>
		<li class="nav-item">
		<a href="listar.php" class="nav-link">Listar</a>
	</li>

	<li class="nav-item">
		<a href="gerenciar.php" class="nav-link">Gerenciar</a>
	</li>

	<li class="nav-item">
		<a href="logout.php" class="nav-link">Logout</a>
	</li>

	
</ul>
<br>


<?php } ?>
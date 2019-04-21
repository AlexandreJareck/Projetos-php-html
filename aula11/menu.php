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
<ul class="nav">
	<li class="nav-item">
		<a href="index.php" class="nav-link">Home</a>
	</li>
	<li class="nav-item">
		<a href="cadastrar_user.php" class="nav-link">Cadastre-se</a>
	</li>
	<li class="nav-item">
		<a href="login.php" class="nav-link">Login</a>
	</li>
</ul>
<br>

<?php } else { // se as variaveis de sessão não estão vazias, significa que há usuário logado.
// Nesse caso, o menu será outro ?>

<br>
<ul class="nav">
	<li class="nav-item">
		<a href="index.php" class="nav-link">Home</a>
	</li>
	<li class="nav-item">
		<a href="perfil.php" class="nav-link">Meu Perfil</a>
	</li>
	<li class="nav-item">
		<a href="logout.php" class="nav-link">Logout</a>
	</li>
</ul>
<br>


<?php } ?>

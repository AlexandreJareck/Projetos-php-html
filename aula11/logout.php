<?php 
session_start();
unset($_SESSION['usuario']);
unset($_SESSION['senha']);
session_destroy();
header('location:login.php');

// unset verifica usuario e senha
// session_destroy, destroi a sessão

?>
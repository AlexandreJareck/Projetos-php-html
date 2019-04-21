<?php session_start();
if( empty($_SESSION['usuario']) || 
	empty($_SESSION['email'])    || 
	empty($_SESSION['senha']) )
	{
		header('location:login.php');
	}
?>

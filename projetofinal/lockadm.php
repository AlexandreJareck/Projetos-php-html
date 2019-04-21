<?php session_start();

$nivel_necessario = 2;
  if (!isset($_SESSION['id_usuario']) OR ($_SESSION['user_nivel'] <$nivel_necessario)) {
      // Destrói a sessão por segurança
      session_destroy();
      // Redireciona o visitante de volta pro login
      header('Location:index.php'); exit;
  }
    
  ?>
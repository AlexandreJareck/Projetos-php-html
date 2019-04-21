<?php  
// constantes de conexão
define('SERVERNAME', 'localhost'); // servidor
define('USERNAME', 'root'); // usuário
define('PASSWORD', ''); // senha
define('DBNAME', 'bd_agenda'); // banco de dados

$conn = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DBNAME);

// checa a conexão
if(!$conn)
{
	die("Erro ao conectar: " . mysqli_connect_error($conn));
}

?>
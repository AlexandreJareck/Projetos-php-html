<?php 

// DICAS HTML // FORM.

// size aumenta o tamanho do campo do formulario.
// maxlength - determina a quantidade de caracteres que pode-se digitar.
// type "tel" - no smartphone entende que aquele eh um campo numérico, e puxa o teclado automaticamente.
// type "ulr" - determina que o tipo eh .com e ja traz no teclado.

?>


<?php
// ====== DICAS MYSQL ========


// ABRINDO CONEXAO

// $servidor = "localhost"; // localhoost nome padrao do xampp
// $usuario = "root";
// $senha = ""; // deixa em branco msm
// $banco = "andes"; // andes foi o nome dado para o banco de dados
// $conn = mysqli_connect($servidor,$usario,$senha,$banco);
?>


<?php 
// TESTAR conexao

// if ( mysqli_connect_errno() ) {
	// die("conexão falhou: " . mysqli_connect_errno() )      // die mata a conexão  (. concatena ela com o erro)	
//}
?>

<?php
// FECHANDO CONEXÃO 
// mysqli_close($conn);

?>


<?php
  		// abrir consulta ao banco de dados

		// $consulta_categoria (nome da tabela) = "SELECT * FROM categorias";
		// $categorias = mysqli_querry($conn, $consulta_categoria);
		// dessa maneira consulta o banco de dados, registrando a querry.

		// teste( if (!$categorias )) // se for falso o teste ded categoria
		// mata a conexão 
		// die("Falha na consulta ao banco ")

		// outra maneira..
		
		// $consulta_categoria = "SELECT *";
		// $consulta_categoria .= " FROM categorias";
		// $consulta_categoria .= " WHERE categoriaID > 2"; // .= SERVE PARA CONCATENAR.
		// desse jeito a consulta ficara uma em baixo da outra.

		// FAZENDO LISTAGEM DE DADOS

		// mysqli_fecth_rows = numero de linhas afetadas, mostra o array pela posição dele.

		// mysqli_fecth_assoc = trás na consulta o nome da coluna ao inves do numero que esta o array.
		

		// mysqli_fecth_array = tra´s igual as duas maneiras (row e assoc) juntas.

        // mysqli_free_result($variavelconsulta) = libera memória do servidor depois das consultas.
		
		// include = inclui arquivo a pagina

		// include_once = só deixa inserir uma vez aquele arquivo, ignorando os demais iguais.

		// required = se alguma coisa der errado, só mostra o erro, diferente no include, que mostra o erro e segue o código.

		// required_once = se der erro para execução da pagina e só deixa inserir uma vez.	


?>
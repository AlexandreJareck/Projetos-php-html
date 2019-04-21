<script src="jquery.js"></script>
       	 	<script>
	            $('#formulario_editar').submit(function(e) {
	                e.preventDefault();
	                var formulario = $(this);
	                var retorno = alterarFormulario(formulario)
	            });
	            
	            function alterarFormulario(dados) {

	            	$.ajax({
	            		type:"POST",
	            		data:dados.serialize(),
	            		url:"editado.php",
	            		async:false
	            	}).done(function(data){
	            		$sucesso = $.parseJSON(data)["sucesso"];
	            		$mensagem = $.parseJSON(data)["mensagem"];

	            		if($sucesso){
	            			$('mensagem p').html($mensagem);
	            		}else{
	            			$('mensagem p').html($mensagem);
	            		}

	            	}).fail(function(){

	            		$('mensagem').html("Erro!!");
	            	}).always(function(){
	            		$('mensagem').show();

	            	})

	            }
        </script>
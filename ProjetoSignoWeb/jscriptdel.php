<script src="jquery.js"></script>
        <script>

        $('#janela_usuario tr td a.excluir').click(function(e){
                        e.preventDefault();        		

                        $.ajax({
                	type:"POST",
                	data:"id= "+ id,
                	url:"deletar.php",
                	async:false 
                }).done(function(data){
                	$sucesso = $.parseJSON(data)["sucesso"];

                	if($sucesso){
                	       $(this).parent().parent().fadeOut();
                	} else {

                	       console.log("Erro na exclusão");

                	}

                }).fail(function(){
                	console.log("Erro no sistema");

                })
        });

        </script>
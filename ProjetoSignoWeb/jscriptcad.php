<script src="jquery.js"></script>
        <script>
            $('#formulario_cadastro').submit(function(e){
                e.preventDefault();
                var formulario = $(this);
                var retorno = inserirFormulario(formulario)
            });

            function inserirFormulario(dados){
                $.ajax({
                    type:"POST",
                    data:dados.serialize(),
                    url:"cadastrado.php",
                    async:false
                }).then(sucesso, falha);

                function sucesso(data){
                    $sucesso = $.parseJSON(data)["sucesso"];
                    $mensagem = $.parseJSON(data)["mensagem"];
                    $('#mensagem').show();
                    if($sucesso){

                        $('#mensagem').html($mensagem);

                    } else {

                        $('#mensagem').html($mensagem);

                    }
                }
                function falha(){
                    console.log("erro");
                }


            }
        </script>
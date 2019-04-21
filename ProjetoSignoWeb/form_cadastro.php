	<h2 >Preencha o formulario a baixo</h2>



	<form name="cadastro" action="cadastrado.php" method="post">

	<p>
		<label>Nome: </label><br>
		<input type="text" name="nome">
	</p>

	<p>
		<label>Endereço: </label><br>
		<input type="text" name="endereco">
	</p>

	<p>
		<label>Bairro: </label><br>
		<input type="text" name="bairro">
	</p>

	<p>
		<label>CEP: </label><br>
		<input type="text" name="cep">
	</p>

	<p>
		<label>Cidade: </label><br>
		<input type="text" name="cidade">
	</p>

	<p>
		<label>UF: </label><br>
		<input type="text" name="uf">
	</p>

	<p>
		<label>E-mail: </label><br>
		<input type="email" name="email">
	</p>

	<p>
		<label>Telefone: </label><br>
		<input type="text" class="form-control phone-ddd-mask" placeholder="(00) 0000-0000" name="telefone">
	</p>

	<h2> Dados Para Produção</h2><br>
		<label> Tipo de Revistinha: </label>
		<input type="radio" name="convite" value="male"> Convite
		<input type="radio" name="convite" value="male"> Lembrança
		<input type="radio" name="convite" value="male"> Convite-Lembraça<br><br>
		<label>Quantidade: </label>
		<input type="text" name="quantidade"><br><br>
		<label>Atrações do evento:</label><br>
		<textarea name="comentarios"></textarea><br><br>

		<input type="checkbox" name="capa" value="capa"> Aceito sugestões de texto para capa<br><br>

		<label for='Imagens: '>Imagens</label>
		<input id='selecao-arquivo' type='file'>
		


	<p>
		<button type="submit" name="btn-cadastrar"  >Cadastrar</button>
	</p>
	</form>
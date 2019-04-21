<main>  
    <div id="janela_formulario">
						
		<form id="formulario_editar">
			<h2>Atualizar cadastro</h2>
			<p>
				<label>Nome: </label><br>
				<input type="text" name="nome" value="<?php echo $cliente ['nome']; ?> ">
			</p>

			<p>
				<label>Endereço: </label><br>
				<input type="text" name="endereco" value="<?php echo $cliente ['endereco']; ?> ">
			</p>

			<p>
				<label>Bairro: </label><br>
				<input type="text" name="bairro" value="<?php echo $cliente ['bairro']; ?> ">
			</p>

			<p>
				<label>CEP: </label><br>
				<input type="text" name="cep" value="<?php echo $cliente ['cep']; ?> ">
			</p>

			<p>
				<label>Cidade: </label><br>
				<input type="text" name="cidade" value="<?php echo $cliente ['cidade']; ?> ">
			</p>

			<p>
				<label>UF: </label><br>
				<input type="text" name="uf" value="<?php echo $cliente ['uf']; ?> ">
			</p>

			<p>
				<label>E-mail</label><br>
				<input type="email" name="email" value="<?php echo $cliente ['email']; ?> ">
			</p>

			<p>
				<label>Telefone: </label><br>
				<input type="text" name="telefone" class="form-control phone-ddd-mask" placeholder="(00) 0000-0000" value="<?php echo $cliente ['telefone']; ?> ">
			</p>
					<input type="hidden" name="id" value="<?php echo $cliente ['id']; ?> ">
								
			<p>
					<input type="submit" value="Salvar">
			</p>
					<div id="mensagem">
                        <p></p>
                    </div>

			</form>

	</div>
</main>	
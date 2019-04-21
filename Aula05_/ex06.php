
	<form name="exercicio05" method="post" action="respostas.php">
		<h2>Boletos em atraso.</h2>

		<p>
			<label>Informe quantos dias o boleto está atrasado:</label>
			<input  type="number"  name="atraso" class="campo">
		</p>

		<p>
			<label>Informe o valor da prestação: :</label>
			<input  type="number" max="999999999999999.99" step="0.01" name="prestacao" class="campo">
		</p>
		<p>
			<button name="enviarex6" type="submit" class="btn btn-outline-success">Enviar</button>
		</p>

	</form>
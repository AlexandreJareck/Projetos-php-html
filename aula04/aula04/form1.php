<form name="ex1" action="respostas.php" method="post">
	
	<h2>Exemplo 01</h2>

	<p>
		<label>Nome:</label><br>
		<input type="text" name="nome" placeholder="Nome" class="campo">
	</p>

	<p>
		<label>Matrícula:</label><br>
		<input type="number" name="matricula" placeholder="Matrícula" class="campo">
	</p>

	<p>
		<label>Curso:</label><br>
		<select name="curso" class="campo">
			<option value="SI" selected>Sistemas de Informação</option>
			<option value="ADS">Análise e Des. de Sistemas</option>
			<option value="JD">Jogos Digitais</option>
		</select>
	</p>

	<p>
		<label>Campus:</label><br>
		<input type="radio" name="campus" value="Osório" checked> Osório <br>
		<input type="radio" name="campus" value="Santos Andrade"> Santos Andrade <br>
		<input type="radio" name="campus" value="Ecovile"> Ecovile
	</p>

	<p>
		<button type="submit" class="btn btn-success" name="enviar_ex1">Enviar</button> 
		<button type="reset" class="btn btn-warning">Limpar</button>
	</p>

</form>
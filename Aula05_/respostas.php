<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<title>Aula 05 - Respostas</title>
</head>
<body class="container">

	<br><br>

	<a href="index.php" class="btn btn-outline-info">Voltar para Home</a>

	<br><br>
<?php 

	if( isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['enviarex1']))
	{
		$num1 = $_POST['num1'];
		$num2 = $_POST['num2'];

		if (($num2 == 0) || ($num1==0)) 
		{
					echo '<div class="container alert-danger">';
					echo '<br>';
					echo '<h2>ATENÇÃO</h2>';
					echo 'Nenhum formulário recebido!';
					echo '<br><br>';
					echo '</div>';
		}
		else 
		{
			$div = $num1 / $num2;
			
			$soma = $num1 + $num2;
			$sub = $num1 - $num2;
			$mult = $num1 * $num2;
		echo "<h2>Respostas do Ex 01</h2>";
		echo "<p>";
		echo "Primeiro Valor: " . $num1 . "<br>";
		echo "Segundo Valor:" . $num2 . "<br>";
		echo "Soma :" . $soma . "<br>";
		echo "Subtração: " . $sub . "<br>";
		echo "Multiplicação: " . $mult . "<br>";
		echo "Divisão :" . $div . "<br>";
		echo "</p>";
		}

	} //fim 1 ex

	 if (isset($_POST['nota1']) && 
		isset($_POST['nota2']) && 
		isset($_POST['nota3']) && 
		isset($_POST['nota4']) && 
		isset($_POST['enviarex2']))
	{	
			$nota1 = $_POST['nota1'];
			$nota2 = $_POST['nota2'];
			$nota3 = $_POST['nota3'];
			$nota4 = $_POST['nota4'];

		if ($nota1==0 || $nota2==0 || $nota3==0 || $nota4==0 )
		{
			echo '<div class="container alert-danger">';
			echo '<br>';
			echo '<h2>ATENÇÃO</h2>';
			echo 'Nenhum formulário recebido!';
			echo '<br><br>';
			echo '</div>';
		}
		else
		{
			$media = ($nota1+$nota2+$nota3+$nota4)/4;
			echo "<h2>Respostas do Ex 02</h2>";
			echo "<p>";
			echo "Primeira Nota: " . $nota1 . "<br>";
			echo "Segunda Nota : " . $nota2 . "<br>";
			echo "Terceira Nota: " . $nota3 . "<br>";
			echo "Quarta Nota  : " . $nota4 . "<br>";
			echo "Média Anual  : " . $media  ;
			echo "</p>"; 
		}
	} // fim ex 02
	
			  if( isset($_POST['idade']) && isset($_POST['enviarex3']))
			{
				$idade = $_POST['idade'];
				if($idade ==0)
				{
					echo '<div class="container alert-danger">';
					echo '<br>';
					echo '<h2>ATENÇÃO</h2>';
					echo 'Nenhum formulário recebido!';
					echo '<br><br>';
					echo '</div>';
				}
				else
				{


				$dias = ($idade*365);

				echo "<h2>Resposta do Ex 03</h2>";
				echo "<p>";
				echo "Até agora você viveu: " . $dias . " Dias. <br>";
				echo "</p>";
				}
			} // fim ex 03
		
			if (isset($_POST['peso']) && isset($_POST['altura']) && isset($_POST['enviarex4']))
			{
				$peso = $_POST['peso'];
				$altura = $_POST['altura'];
				if ($peso == 0 || $altura == 0)
				{
					echo '<div class="container alert-danger">';
					echo '<br>';
					echo '<h2>ATENÇÃO</h2>';
					echo 'Nenhum formulário recebido!';
					echo '<br><br>';
					echo '</div>';
				}
				else
				{
					
				$conta1 = ($altura*$altura);
				$conta2 = ($peso/$conta1);
				$resultado = ($conta2);

				echo "<h2>Seu IMC é :</h2>";
				echo "<p>";
				echo "<h4>" . $resultado . "</h4>";
				echo "</p>";
				}
			}

			
				if (isset($_POST['codigo']) && isset($_POST['valor']) && isset($_POST['enviarex5']))
				{

					$codigo = $_POST['codigo'];
					$valor1 = $_POST['valor'];

					if($codigo == 0 || $valor == 0)
					{
						echo '<div class="container alert-danger">';
						echo '<br>';
						echo '<h2>ATENÇÃO</h2>';
						echo 'Nenhum formulário recebido!';
						echo '<br><br>';
						echo '</div>';
					}
					else
					{


					$resultado1 = ($valor1*0.08);
					$soma1 = ($valor1-$resultado1);

					echo "<h2>O Desconto de 8% ficou em :</h2>";
					echo "<p>";
					echo "Valor do produto: " . $valor1 ."<br>";
					echo "Código do produto: " . $codigo . "<br>";
					echo "<h4>" . $soma1 . "</h4>";
					echo "</p>";
					}	

				}


				if (isset($_POST['atraso']) && isset($_POST['prestacao']) && isset($_POST['enviarex6']))
				{
					$multa = 0.06;
					$juros = 0.02;
					$atraso = $_POST['atraso'];
					$prestacao = $_POST['prestacao'];

					if($atraso == 0 || $prestacao == 0)
					{
						echo '<div class="container alert-danger">';
						echo '<br>';
						echo '<h2>ATENÇÃO</h2>';
						echo 'Nenhum formulário recebido!';
						echo '<br><br>';
						echo '</div>';
					}
					else
					{


						$prestacaodias = ($prestacao*$juros)*$atraso;


						$prestacaomulta = ($prestacao+$prestacaodias);
						$prestacaototal = ($prestacaomulta*$multa)+$prestacaomulta;
						$juros1 = $prestacao+$prestacaodias;

						echo "<h2>O Valor total a ser pago:</h2>";
						echo "<p>";
						echo "Valor da prestação: " . $prestacao ."$<br>";
						echo "Dias de atraso: " . $atraso . "<br>";
						echo "Valor com juros: " . $juros1 . "$<br>";
						echo "<h4>Total a ser pago: " . $prestacaototal . "$</h4>";
						echo "</p>";
					}

				}

				if (isset($_POST['gasolina']) && isset($_POST['enviarex7']))
				{

					$aux = 0.70;
					$gasolina = $_POST['gasolina'];
					$alcool = ($gasolina*0.70);
					if ($gasolina == 0 )
					{
						echo '<div class="container alert-danger">';
						echo '<br>';
						echo '<h2>ATENÇÃO</h2>';
						echo 'Nenhum formulário recebido!';
						echo '<br><br>';
						echo '</div>';

					}
					else
					{


						echo "<h2>Até Quanto você pode pagar: </h2>";
						echo "<p>";
						echo "<h4>Valor do alcool para compensar : " . $alcool ."$</h4><br>";
						echo "</p>";

					}

				}

			


?>
</body>
</html>
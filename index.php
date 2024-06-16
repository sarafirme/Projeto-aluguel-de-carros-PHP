<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<link rel="stylesheet" type="text/css" href="css/carros.css">
	<title>Programação PHP</title>

	<style type="text/css">
		.bt{
			padding: 10px;
			border: solid 1px black;
			border-radius: 10px;
			border-color: #c3c3c3;
			
		}
		.bt:hover{
			padding: 30px;
			border: solid 1px black;
			border-radius: 10px;
			border-color: #c3c3c3;
			background-color: blue;
			color: green;
			box-shadow: 0px 1px black;
			
		}
		.inp:focus{
 			border-color: yellow;
		}
		.bt1:hover{
			cursor: pointer;
		}
		table { border-spacing: 15px 10px; }
	</style>
	
</head>
<body>	

	<header>
		<h3>PROGRAMAÇÃO PHP</h3>
		<h4>TECTREINAMENTOS INFORMÁTICA LTDA</h4>
	</header>
	<br><br><br><br><br><br><br><br><br><br><br><br>

	<section>

		<h1>Aluguel de Veículos</h1><br>
		<h2>Modelo de Página <u>Front</u> e <u>Backend</u></h2>

		<div class="formulário">

			<form action="analise.php" method="GET" target="">

				<label for="pesquisa">pesquisar</label>&nbsp

				<input type="text" id="pesquisa" name="pesquisa" placeholder=" Digite Aqui a Sua Pesquisa"> 
				
				<input type="submit" id="enviar" class="bt1" name="enviar" value="Pesquisar"><br>

			</form>
			


		</div>
		<br><br>
		<section class="container" id="grid-container">

		<div class="grid">
			
			<div>
				<h2>Hatch</h2>
				<img src="img/hatch.png" alt="Carro Hatch"><br>
				<a href="hatch.html"  class="bt">CLIQUE PARA ALUGAR</a>
			</div>

			<div>
				<h2>Sedan</h2>
				<img src="img/sedan.png" alt="Carro Sedan"><br>
				<a href="sedan.html" class="bt">CLIQUE PARA ALUGAR</a>
			</div>


			<div>
				<h2>SUV</h2>
				<img src="img/suv.png" alt="Carro SUV"><br>
				<a href="suv.html" class="bt">CLIQUE PARA ALUGAR</a>
			</div>
			<!--
			<div>conteudo4</div>
			<div>conteudo5</div>
			<div>conteudo6</div>
			-->
		</div>
			
		</section>

		
		<br><br>

	</section>

	<br>
<section>

	<fieldset>
		<legend><h2>Faça seu orçamento de aluguel</h2></legend>

		<form action="aluguel.php" method="get" target="">
			<table>
			<tr>
				<td><label for="data">Data do Orçamento</label><br><br>
			    <input type="date" id="data" name="data" style="width:234px;"> </td>
			    <td><label for="tempo">Tempo de Aluguel(dias)</label><br><br>
			<input type="text" class="inp" id="tempo" name="tempo"></td>
 			</tr>
 			<tr>
 				<td><label for="nomeClient">Insira Seu Nome</label><br><br>
			<input type="text" id="nomeClient" class="inp" name="nome" placeholder="Insira Seu Nome Completo">
		  </td>
		  <td><label for="obs">Observações Adicionais</label><br><br>
			<input type="text" id="obs" class="inp" name="obs" placeholder="Alguma Observação?"> </td>
 			</tr>
 			<tr>
 				<td><label>Escolha o Veículo (Modelo)</label><br>
			<select name="modelo">
				<option>HATCH</option>
				<option>SEDAN</option>
				<option>SUV</option>
			</select></td>
 			</tr>
 			<tr>
 				<td>
 					<input type="submit" class="bt1" name="Enviar">
 				</td>
 			</tr>
			</table>

		</form>

	</fieldset>

</section>
<br><br>
	<footer>
		
		<h3>TECTREINAMENTOS INFORMATICA LTDA</h3>
		<h4>Programação web com HTML, CSS E PHP</h4>
		<h4>Página Modelo Para Cursos de Desenvolvimento Web</h4>
		<br>
		<p class="texto-rodape"><b>Contatos</b>Email: testecurso@gmail.com</p>
		<h6>Desenvolvido por TECTREINAMENTOS INFORMÁTICA</h6>

	</footer>

</body>
</html>
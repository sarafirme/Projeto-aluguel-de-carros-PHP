<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<title>Programação PHP</title>
	<style type="text/css">
		header{
			position: fixed;
			width: 100%;
		}
		.formulário{
			background-color: #2F4F4F;
			color: #fff;
			text-shadow: 2px 2px #000;
			padding: 10px;
			font-size: 1.9rem;
			font-weight: bold;
		}

		input{

			font-size: 1.7rem;
			padding: 4px;
			border-radius: 10px;
			border: solid;
			font-weight: bold;
		}
		h2{
			text-align: left;
			padding: 2 px;
		}
		#enviar{
			background-color: rgb(0, 255, 0, 1.0);
		}
		p{
			font-size: 1.6rem;
			padding: 2px;
		}
		#grid-container{
			background-color: rgba(0, 0, 255, 0.15);
		}
		.grid{
			display: grid;
			grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
			grid-gap: 5px;
			max-width: 1200px;
			margin: 0  auto;
		}

		.grid div{
			font-size: 1.6rem;
			text-align: center;
			background-color: rgba(255, 255, 255, 1.5);
			padding-bottom: 25px;
		}
		h1{
			text-align: center;	
		}
		img{
			width: 85%;
			height: 75%;

		}
		a{
			font-size: 1.7rem;
			color: rgba(255, 0, 0, 1.0);
			font-weight: bold;
			text-decoration: none;
		}
		fieldset{
			border: solid;
			padding: 3%;
			font-size: 1.7rem;
			font-weight: bold;
			text-align: left;
			border-radius: 20px;
		}
		select{
			border-radius: 10px;
			border: solid;
			padding: 5px;
			font-size: 1.7rem;
			font-weight: bold;

		}
		option{
			font-size: 1.7rem;
			font-weight: bold;
			padding: 5px;

		}

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
		<h2>Modelo de Página Front e Backend</h2>

		<div class="formulário">

			<form action="analise.php" method="GET" target="">

				<label for="pesquisa">pesquisar</label>&nbsp

				<input type="text" id="pesquisa" name="pesquisa" placeholder=" Digite Aqui a Sua Pesquisa"> 
				
				<input type="submit" id="enviar" name="enviar" value="Pesquisar"><br>

			</form>
			


		</div>
		<br><br>
		<section class="container" id="grid-container">

		<div class="grid">
			
			<div>
				<h2>Hatch</h2>
				<img src="img/hatch.png" alt="Carro Hatch"><br>
				<a href="hatch.html">CLIQUE PARA ALUGAR</a>
			</div>

			<div>
				<h2>Sedan</h2>
				<img src="img/sedan.png" alt="Carro Sedan"><br>
				<a href="sedan.html">CLIQUE PARA ALUGAR</a>
			</div>


			<div>
				<h2>SUV</h2>
				<img src="img/suv.png" alt="Carro SUV"><br>
				<a href="suv.html">CLIQUE PARA ALUGAR</a>
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
	<?php

		$data = $_GET["data"];
		$tempo = $_GET["tempo"];
		$modelo = $_GET["modelo"];
		$nome = $_GET["nome"];
		$obs= $_GET["obs"];

		$modelo1 = $tempo*100;
		$modelo2 = $tempo*200;
		$modelo3 = $tempo*300;

		echo "Olá Sr(a) $nome, seja muito bem vindo(a) a nossa página de orçamentos <br><br>";
		echo "O modelo escolhido foi: <b> $modelo </b><br><br>";
		echo "Data da consulta $data <b>OBS: Orçamento válido por 15 dias após esta data</b> <br><br>";

		if ($modelo == "HATCH"){

			echo "O valor Total do orçamento é R$ $modelo1";	
		}elseif ($modelo == "SEDAN"){

			echo "O valor Total do orçamento é R$ $modelo2";	
		}else{
			echo "O valor Total do orçamento é R$ $modelo3";
		}

		echo "<br><br>Observação adicional do cliente: $obs <br><br>";
		echo "<br><br>Agradecemos por sua consulta <br><br>";


	?>
	<br><br>
	<h5>WhatsApp Para Contato: (22) 22222222</h5><br><br>

	<a href="index.php"> << VOLTAR</a>
	
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
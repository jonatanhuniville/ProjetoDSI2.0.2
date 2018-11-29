<?php
	require_once("../Controler/generic_functions.php");
	$user = $_REQUEST['nomeempresa'];
	$pass = $_REQUEST['senhaempresa'];
	$cdempresa = $_REQUEST['cdempresa'];

	$userLogged = validateLoginToLoggedPages($user, $pass);	
?>
<!-- https://www.youtube.com/watch?v=V48E_pRlKjE --><!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<html>
	<head>
		<title>Negócio Gente Grande</title>
		<link rel="stylesheet" href="css/cadastroProduto.css" />
	</head>
	<body>
		<div class=cadastro>
			<h1>Bem vindo ao Negócio Gente Grande</h1>
			<form class="cadastro" action="../Controler/cadastroProduto.php" method="POST">
				<p>Cadastre seu produto:</p>
				</header>
				<h5>Por favor, digite o nome de seu produto:</h5>
				<input type="text" class="cadastro" id="nomeproduto" name="nomeproduto">
				<h5>Agora por gentileza, informe o valor do produto:</h5>
				<input type="text" class="cadastro" id="valorproduto" name="valorproduto">
				<h5>Por fim, nos diga o tipo de produto:</h5>
				<select class="cadastro" id="tipoproduto" name="tipoproduto">
					<option value="default">Selecione o tipo:</option>
					<option value="bebidas">Bebidas</option>
					<option value="mobiliario">Mobiliário</option>
					<option value="vestuario">Vestuário</option>
					<option value="metalurgia">Metalúrgico</option>
					<option value="mecanica">Mecânico</option>
					<option value="veiculos">Veículos</option>
					<option value="combustiveis">Combustíveis</option>
					<option value="alimenticio">Alimentício</option>
					<option value="transporte">Transportes</option>
					<option value="turismo">Turismo</option>
					<option value="saude">Saúde</option>
					<option value="educacao">Educação</option>
					<option value="lazer">Lazer</option>
				</select>
				<a><input type="submit" id="botaoCadastro" class="submitCadastro" value="Prosseguir"></a>
			</form>
		</div>
	</body>
</html>
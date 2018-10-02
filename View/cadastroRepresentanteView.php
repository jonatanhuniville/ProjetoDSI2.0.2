<!-- https://www.youtube.com/watch?v=V48E_pRlKjE --><!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<html>
	<head>
		<title>Negócio Gente Grande</title>
		<link rel="stylesheet" href="css/index.css" />
	</head>
	<body>
		<div class=cadastro>
			<h1>Negócio Gente Grande</h1>
			<form class="cadastro" action="../Controler/cadastroRepresentante.php" method="POST">
				<p>Cadastre seu representante:</p>
				</header>
				<h5>Por favor, digite o nome de seu representante:</h5>
				<input type="text" class="cadastro" id="nomerepresentante" name="nomerepresentante">
				<h5>Agora por gentileza, informe o CPF (apenas números):</h5>
				<input type="text" pattern="\d{14}" class="cadastro" id="cpfrepresentante" name="cpfrepresentante">
				<h5>Escolha uma senha:</h5>
				<input type="password" class="cadastro" id="senharepresentante" name="senharepresentante" data-tip="Hyper Text Makeup Language" >
				<a><input type="submit" id="botaoCadastro" class="submitCadastro" value="Prosseguir"></a>
			</form>
		</div>
	</body>
</html>
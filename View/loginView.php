<!-- https://www.youtube.com/watch?v=V48E_pRlKjE --><!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<html>
	<head>
		<title>Negócio Gente Grande</title>
		<link rel="stylesheet" href="css/login.css" />
	</head>
	<body>
		<div class=login>
			<h1>Bem vindo ao Negócio Gente Grande</h1>
			<form class="login" action="../Controler/login.php" method="POST">
				<p>Efetuar login:</p>
				</header>
				<h5>Por favor, digite o nome de sua empresa:</h5>
				<input type="text" class="login" id="nomeempresa" name="nomeempresa">
				<h5>Agora informe sua senha:</h5>
				<input type="password" class="login" id="senhaempresa" name="senhaempresa" data-tip="Hyper Text Makeup Language" >
				<input type="submit" class="submitLogin" value="Prosseguir">
			</form>
		</div>
	</body>
</html>
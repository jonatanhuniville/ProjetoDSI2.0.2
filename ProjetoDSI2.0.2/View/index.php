<html>
	<head>
		<title>Negócio Gente Grande</title>
		<link rel="stylesheet" href="css/index.css" />
	</head>
	<body>
		<div class=cadastro>
			<h1>Cadastre sua Empresa</h1>
			<form class="cadastro" action="cadastro.php" method="POST"><p>Bem vindo ao cadastro de empresas do Negócio Gente Grande</p>
				</header>
				<p><h5>Por favor, digite o nome de sua empresa:</h5></p>
				<input type="text" class="cadastro" id="nomeempresa" name="nomeempresa">
				<p><h5>Agora por gentileza, informe o CNPJ (apenas números):</h5></p>
				<input type="text" pattern="\d{14}" class="cadastro" id="cnpjempresa" name="cnpjempresa">
				<p><h5>Escolha uma senha:</h5></p>
				<input type="password" class="tool" id="senhaempresa" name="senhaempresa" data-tip="Hyper Text Makeup Language" >
				<p><h5>Por fim, nos diga o ramo em que atua:</h5></p>
				<select class="cadastro" id="ramoempresa" name="ramoempresa">
					<option value="null"></option>
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
				<a><input type="submit" id="botaoCadastro" class="button big scrolly" value="Prosseguir"></a>
			</form>
		</div>
	</body>
</html>
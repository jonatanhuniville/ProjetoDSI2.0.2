<?php
	require_once("../Controler/generic_functions.php");
	$user = $_REQUEST['nomeempresa'];
	$pass = $_REQUEST['senhaempresa'];
	$cdempresa = isset($_REQUEST['cdempresa']) ? $_REQUEST['cdempresa'] : null;

	$userLogged = validateLoginToLoggedPages($user, $pass);

	if (!$userLogged) {
		?>
		<script type="text/javascript">
			alert("Você não está logado! Favor efetuar login.");
			window.location.href = "../View/loginView.php";
		</script>
		<?php
	}

	$representantes = returnRepresentantes($cdempresa);
	if (!empty($representantes)) {
		$representantesCount = count($representantes);
		$count = 0;
		while ($count < $representantesCount) {
			$representantes[] = $representantes[$count];
			$count ++;
		}
	} else {
		$representantesCds = array();
	}
?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<html>
	<head>
		<title>Negócio Gente Grande</title>
		<link rel="stylesheet" href="css/homepage.css"/>
	</head>
	<body>
		<div class=homepage>
			<script type="text/javascript">
				nomeEmpresa = '<?=$user;?>';
				senhaEmpresa = '<?=$pass;?>';
				cdempresa = '<?=$cdempresa?>'
			</script>
			<h1>Bem vindo ao Negócio Gente Grande</h1>
			<button type="button" class="homepage" onclick="window.location.href='cadastroRepresentanteView.php?&nomeempresa='+nomeEmpresa+'&senhaempresa='+senhaEmpresa+'&cdempresa='+cdempresa">Cadastrar representante</button>
			<button type="button" class="homepage" onclick="openItemCadastro()">Cadastrar Item</button>
			<div>
				<script>
					function openItemCadastro()
					{
						window.open('cadastroRepresentanteView.php?&nomeempresa='+nomeEmpresa+'&senhaempresa='+senhaEmpresa+'&cdempresa='+cdempresa, "", "width=650,height=500,left=325,top=200");
					}
				</script>	
			</div>		
		</div>
	</body>
</html>
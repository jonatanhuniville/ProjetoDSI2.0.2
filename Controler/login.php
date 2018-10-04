<?php
	require_once("class.databaseconnection.inc");

	$nomeEmpresa = isset($_REQUEST['nomeempresa']) ? $_REQUEST['nomeempresa'] : null;
	$senhaEmpresa = isset($_REQUEST['senhaempresa']) ? $_REQUEST['senhaempresa'] : null;

	$dbObj = new databaseconnection();
	$dbObj = $dbObj->connectDatabase("localhost", "root", "univille", "PROJETODSI202");

	if (empty($nomeEmpresa)) {
		?>
			<script type="text/javascript">
				alert("Favor informe o nome de sua empresa.");
				window.location.href = "../View/loginView.php";
			</script>
		<?php
	} else if (empty($senhaEmpresa)){
		?>
			<script type="text/javascript">
				alert("Favor informe a senha de sua empresa.");
				window.location.href = "../View/loginView.php";
			</script>
		<?php
	}

	$sqlQuery = "SELECT * FROM EMPRESA WHERE UPPER(NOMEEMPRESA) = UPPER('$nomeEmpresa') AND UPPER(SENHAEMPRESA) = UPPER('$senhaEmpresa')";

	$resultSet = $dbObj->query($sqlQuery);

	if ($resultSet->num_rows == 1) {
		?>
			<script type="text/javascript">
				alert("Login efetuado com sucesso!");
				nomeEmpresa = '<?=$nomeEmpresa;?>';
				senhaEmpresa = '<?=$senhaEmpresa;?>';
				window.location.href = "../View/homepage.php?&nomeempresa="+nomeEmpresa+"&senhaempresa="+senhaEmpresa;
			</script>
		<?php
	} else {
		?>
			<script type="text/javascript">
				alert("Credenciais incorretas! Favor tentar novamente.");
				window.location.href = "../View/loginView.php";
			</script>
		<?php
	}
?>
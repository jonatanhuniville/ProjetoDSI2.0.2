<?php
	require_once("class.databaseconnection.inc");

	function login($login = null, $pass = null){

		global $resultSet;

		$dbObj = new databaseconnection();
		$dbObj = $dbObj->connectDatabase("localhost", "root", "univille", "PROJETODSI202");

		$sqlQuery = "SELECT * FROM EMPRESA WHERE UPPER(NOMEEMPRESA) = UPPER('$login') AND UPPER(SENHAEMPRESA) = UPPER('$pass')";

		$resultSet = $dbObj->query($sqlQuery);
		return $validation = $resultSet->num_rows;
	}

	$nomeEmpresa = isset($_REQUEST['nomeempresa']) ? $_REQUEST['nomeempresa'] : null;
	$senhaEmpresa = isset($_REQUEST['senhaempresa']) ? $_REQUEST['senhaempresa'] : null;

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

	$num_rows = login($nomeEmpresa, $senhaEmpresa);

	if ($num_rows == 1) {
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
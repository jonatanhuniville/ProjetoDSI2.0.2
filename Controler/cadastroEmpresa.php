<?php
	require_once("class.databaseconnection.inc");

	$nomeEmpresa = isset($_REQUEST['nomeempresa']) ? $_REQUEST['nomeempresa'] : null;
	$senhaEmpresa = isset($_REQUEST['senhaempresa']) ? $_REQUEST['senhaempresa'] : null;
	$ramoEmpresa = isset($_REQUEST['ramoempresa']) ? $_REQUEST['ramoempresa'] : null;
	$cnpjEmpresa = isset($_REQUEST['cnpjempresa']) ? $_REQUEST['cnpjempresa'] : null;

	$dbObj = new databaseconnection();
	$dbObj = $dbObj->connectDatabase("localhost", "root", "univille", "PROJETODSI202");

	if (empty($nomeEmpresa)) {
		?>
			<script type="text/javascript">
				alert("Favor informe o nome de sua empresa.");
				window.location.href = "../View/cadastroEmpresaView.php";
			</script>
		<?php
	} else if (empty($senhaEmpresa)){
		?>
			<script type="text/javascript">
				alert("Favor informe a senha de sua empresa.");
				window.location.href = "../View/cadastroEmpresaView.php";
			</script>
		<?php
	} else if (empty($ramoEmpresa) || $ramoEmpresa == "default") {
		?>
			<script type="text/javascript">
				alert("Favor informe o ramo de sua empresa.");
				window.location.href = "../View/cadastroEmpresaView.php";
			</script>
		<?php
	} else if (empty($cnpjEmpresa)){
		?>
			<script type="text/javascript">
				alert("Favor informe o CNPJ de sua empresa.");
				window.location.href = "../View/cadastroEmpresaView.php";
			</script>
		<?php
	}

	$sqlQuery = "INSERT INTO EMPRESA (NOMEEMPRESA, SENHAEMPRESA, CNPJEMPRESA, RAMOEMPRESA) VALUES ('$nomeEmpresa', '$senhaEmpresa', '$cnpjEmpresa', '$ramoEmpresa')";

	$resultSet = $dbObj->query($sqlQuery);	
?>
<script type="text/javascript">
		alert("Empresa cadastrada com sucesso!");
		window.location.href = "../View/loginView.php?";
	</script>
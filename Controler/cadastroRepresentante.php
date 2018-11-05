<?php
	require_once("class.databaseconnection.inc");

	$nomerepresentante = isset($_REQUEST['nomerepresentante']) ? $_REQUEST['nomerepresentante'] : null;
	$senharepresentante = isset($_REQUEST['senharepresentante']) ? $_REQUEST['senharepresentante'] : null;
	$cpfrepresentante = isset($_REQUEST['cpfrepresentante']) ? $_REQUEST['cpfrepresentante'] : null;

	$dbObj = new databaseconnection();
	$dbObj = $dbObj->connectDatabase("localhost", "root", "univille", "PROJETODSI202");

	$user = $_REQUEST['nomeempresa'];
	$pass = $_REQUEST['senhaempresa'];
	$redirect;

	if (empty($nomerepresentante)) {
		$redirect = true;
		?>
			<script type="text/javascript">
				alert("Favor informe o nome de seu representante.");
			</script>
		<?php
	} else if (empty($senharepresentante)){
		$redirect = true;
		?>
			<script type="text/javascript">
				alert("Favor informe a senha de seu representante.");
			</script>
		<?php
	} else if (empty($cpfrepresentante)){
		$redirect = true;
		?>
			<script type="text/javascript">
				alert("Favor informe o CPF de seu representante.");
			</script>
		<?php
	} else {
		$sqlQuery = "INSERT INTO REPRESENTANTE (NOMEREPRESENTANTE, SENHAREPRESENTANTE, CPFREPRESENTANTE) VALUES ('$nomerepresentante', '$senharepresentante', '$cpfrepresentante')";
		$resultSet = $dbObj->query($sqlQuery);
		$redirect = false;
	}

	if ($redirect) {
		echo "<script type='text/javascript'>alert('Faltam informar dados, favor rever o cadastro.');</script>";
		header("Location: ../View/cadastroRepresentanteView.php?nomeempresa=".$user."&senhaempresa=".$pass);
	}
?>
<script type="text/javascript">
	var results = "<?=$resultSet?>";
	alert(results);
	alert("Representante cadastrado com sucesso!");
	//window.location.href = "../View/homepage.php?";
</script>

	
<!--	if (isset($resultSet) && $resultSet == 1) {-->



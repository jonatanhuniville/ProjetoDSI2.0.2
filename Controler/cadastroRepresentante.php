<?php
	require_once("class.databaseconnection.inc");

	$nomerepresentante = isset($_REQUEST['nomerepresentante']) ? $_REQUEST['nomerepresentante'] : null;
	$senharepresentante = isset($_REQUEST['senharepresentante']) ? $_REQUEST['senharepresentante'] : null;
	$cpfrepresentante = isset($_REQUEST['cpfrepresentante']) ? $_REQUEST['cpfrepresentante'] : null;

	$dbObj = new databaseconnection();
	$dbObj = $dbObj->connectDatabase("localhost", "root", "", "PROJETODSI202");

	$user = $_REQUEST['nomeempresa'];
	$pass = $_REQUEST['senhaempresa'];
	$cdempresa = $_REQUEST['cdempresa'];
	$redirect;

	if (empty($nomerepresentante)) {
		$redirect = true;
	} else if (empty($senharepresentante)){
		$redirect = true;
	} else if (empty($cpfrepresentante)){
		$redirect = true;
	} else {
		$sqlQuery = "INSERT INTO REPRESENTANTE (CDEMPRESA, NOMEREPRESENTANTE, SENHAREPRESENTANTE, CPFREPRESENTANTE) VALUES (".$cdempresa.", '$nomerepresentante', '$senharepresentante', '$cpfrepresentante')";
		$resultSet = $dbObj->query($sqlQuery);
		$redirect = false;
	}

	if ($redirect) {
		echo "<script type='text/javascript'>
				alert('Faltam informar dados, favor rever o cadastro.');
				window.location.href(window.history.back());
			</script>";
	}
?>
<script type="text/javascript">
	var results = "<?=$resultSet?>";
	alert("Representante cadastrado com sucesso!");
	var user = "<?=$user?>";
	var pass = "<?=$pass?>";
	var cdempresa = "<?=$cdempresa?>";
	window.location.href = "../View/homepage.php?nomeempresa="+user+"&senhaempresa="+pass+"&cdempresa="+cdempresa;
</script>

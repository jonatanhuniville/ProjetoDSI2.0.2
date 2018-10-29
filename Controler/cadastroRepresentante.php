<?php
	require_once("class.databaseconnection.inc");

	$nomerepresentante = isset($_REQUEST['nomerepresentante']) ? $_REQUEST['nomerepresentante'] : null;
	$senharepresentante = isset($_REQUEST['senharepresentante']) ? $_REQUEST['senharepresentante'] : null;
	$cpfrepresentante = isset($_REQUEST['cpfrepresentante']) ? $_REQUEST['cpfrepresentante'] : null;

	$dbObj = new databaseconnection();
	$dbObj = $dbObj->connectDatabase("localhost", "root", "univille", "PROJETODSI202");

	$user = $_REQUEST['nomeempresa'];
	$pass = $_REQUEST['senhaempresa'];
	if (empty($nomerepresentante)) {
		?>
			<script type="text/javascript">
				alert("Favor informe o nome de seu representante.");
				var nomeEmpresa = '<?=$user;?>'; 
				var senhaEmpresa = '<?=$pass;?>';
				//window.location.href = "../View/cadastroRepresentanteView.php?nomeempresa="+nomeEmpresa"&senhaempresa="+senhaEmpresa;
			</script>
		<?php
	} else if (empty($senharepresentante)){
		?>
			<script type="text/javascript">
				alert("Favor informe a senha de seu representante.");
				var nomeEmpresa = '<?=$user;?>'; 
				var senhaEmpresa = '<?=$pass;?>';
				//window.location.href = "../View/cadastroRepresentanteView.php?nomeempresa="+nomeEmpresa"&senhaempresa="+senhaEmpresa;
			</script>
		<?php
	} else if (empty($cpfrepresentante)){
		?>
			<script type="text/javascript">
				alert("Favor informe o CPF de seu representante.");
				var nomeEmpresa = '<?=$user;?>'; 
				var senhaEmpresa = '<?=$pass;?>';
				//window.location.href = "../View/cadastroRepresentanteView.php?nomeempresa="+nomeEmpresa"&senhaempresa="+senhaEmpresa;
			</script>
		<?php
	} else {
		$sqlQuery = "INSERT INTO REPRESENTANTE (NOMEREPRESENTANTE, SENHAREPRESENTANTE, CPFREPRESENTANTE) VALUES ('$nomerepresentante', '$senharepresentante', '$cpfrepresentante')";
		$resultSet = $dbObj->query($sqlQuery);
	}	
	
	if (isset($resultSet) && $resultSet == 1) {
		?>
			<script type="text/javascript">
				alert("Representante cadastrado com sucesso!");
				//window.location.href = "../View/homepage.php?";
			</script>
		<?}?>



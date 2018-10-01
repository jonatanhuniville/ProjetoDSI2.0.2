<?php
	require_once("class.databaseconnection.inc");
	$nomeEmpresa = $_REQUEST['nomeempresa'];
	$senhaEmpresa = $_REQUEST['senhaempresa'];
	$ramoEmpresa = $_REQUEST['ramoempresa'];
	$cnpjEmpresa = $_REQUEST['cnpjempresa'];

	//TO DO = validações de campos nulos antes de inserir no banco

	$dbObj = new databaseconnection("localhost", "root", "", "PROJETODSI202");
	$sqlQuery = "INSERT INTO EMPRESA (NOMEEMPRESA, CNPJEMPRESA, SENHAEMPRESA, RAMOEMPRESA) VALUES ('$nomeEmpresa', '$senhaEmpresa', '$ramoEmpresa', '$cnpjEmpresa')";
	$resultSet = $dbObj->query($sqlQuery);

	if ($dbObj->query($sqlQuery) === true) {
		echo "sucesso";
	} else {
		echo "deu pau";
	}



	//header("location.href:../View/homepage.php");
?>
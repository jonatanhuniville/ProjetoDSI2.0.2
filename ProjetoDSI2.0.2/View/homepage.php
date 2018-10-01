<?php
	require_once("../Controler/class.databaseconnection.inc");
	$dbObj = new databaseconnection();
	$dbObj->connectDatabase("localhost", "root", "", "PROJETODSI202");

	error_log(print_r($_REQUEST));
	$nomeEmpresa = $_REQUEST['nomeempresa'];
	$senhaEmpresa = $_REQUEST['senhaempresa'];
	//$resultSet = ($dbObj->query());
?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<html>
	<head>
		<title>Negócio Gente Grande</title>
		<link rel="stylesheet" href="css/homepage.css" />
	</head>
	<body>
		<div class=homepage>
				
			</form>
		</div>
	</body>
</html>
<?php
	function validateEmptyField($param)
	{
		if (empty($param)) {
			return true;
		} else {
			return false;
		}
	}

	function validateLoginToLoggedPages($user, $pass)
	{
		if ($user == null || $pass == null) {
			?>
			<script type="text/javascript">
				alert("Você não está logado! Favor efetuar login.");
				window.location.href = "../View/loginView.php";
			</script>
			<?php
		} else {
			require_once("class.databaseconnection.inc");

			$dbObj = new databaseconnection();
			$dbObj = $dbObj->connectDatabase("localhost", "root", "", "PROJETODSI202");

			$sqlQuery = "SELECT * FROM EMPRESA WHERE UPPER(NOMEEMPRESA) = UPPER('$user') AND UPPER(SENHAEMPRESA) = UPPER('$pass')";

			$resultSet = $dbObj->query($sqlQuery);
			if ($resultSet->num_rows == 1) {
				return true;
			} else {
				return false;
			}
		}
	}

	function validateLoginToCommonPages($user, $pass)
	{
		if ($user == null || $pass == null) {
			
		} else {

		}
	}

	function returnRepresentantes($cdempresa)
	{
		require_once("class.databaseconnection.inc");

		$dbObj = new databaseconnection();
		$dbObj = $dbObj->connectDatabase("localhost", "root", "", "PROJETODSI202");

		$sqlQuery = "SELECT * FROM REPRESENTANTE WHERE CDEMPRESA = ".$cdempresa;

		$resultSet = $dbObj->query($sqlQuery);

		if ($resultSet->num_rows >= 1) {
			return $resultSet->fetch_all();
		} else {
			return false;
		}
	}
?>
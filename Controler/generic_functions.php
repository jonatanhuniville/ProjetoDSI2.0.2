<?php
	require_once("login.php");

	function validateEmptyField($param){
		if (empty($param)) {
			return true;
		} else {
			return false;
		}
	}

	function validateLoginToLoggedPages($user, $pass){
		if ($user == null || $pass == null) {
			?>
			<script type="text/javascript">
				alert("Você não está logado! Favor efetuar login.");
				window.location.href = "../View/loginView.php";
			</script>
			<?php
		} else {
			
		}
	}

	function validateLoginToCommonPages($user, $pass){
		if ($user == null || $pass == null) {
			
		} else {

		}
	}
?>
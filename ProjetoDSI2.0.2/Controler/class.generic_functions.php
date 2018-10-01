<?php
	function validateEmptyField($param){
		if (empty($param)) {
			return true;
		} else {
			return false;
		}
	}
?>
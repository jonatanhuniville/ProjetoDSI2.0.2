<?php
	class databaseconnection{
		public function connectDatabase($dbHost, $dbUser, $dbPassword, $dbName){
			$conexao = new mysqli($dbHost, $dbUser, $dbPassword, $dbName);
			$connectionOk = true;

			if($conexao->connect_errno > 0){
				$connectionOk = false;
			}
			if($connectionOk){
				return $conexao;
			} else {
				return $conexao->connect_error;
			}

		}
	}
?>
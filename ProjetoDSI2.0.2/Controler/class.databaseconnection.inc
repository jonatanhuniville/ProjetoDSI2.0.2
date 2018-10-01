<?php
	class databaseconnection{
		public function connectDatabase($dbHost, $dbUser, $dbPassword, $dbName){
			$conexao = new mysqli_connect($dbHost, $dbUser, $dbPassword, $dbName);
			$connectionOk = true;
			mysqli_set_charset($conexao,'utf8');

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
<?php

class Banco{
	

	//CÃ³digo de conexÃ£o ao BD
	function conexao(){

		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "realmotos";

		//$conectaBD = new mysqli('localhost', 'USUARIO_BD', 'SENHA_BD', 'NOME_BD');
		$conectaBD = new mysqli($servername, $username, $password,$dbname);

		// Check connection
		if (!$conectaBD) {
			die("Connection failed: " . mysqli_connect_error());
		} else {
			echo "Connected successfully";
		}
	}
}

?>
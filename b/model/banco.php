<?php

class Banco{
	

	//CÃ³digo de conexÃ£o ao BD
	function conexao(){

		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "realmotos";

		//$conectaBD = new mysqli('localhost', 'USUARIO_BD', 'SENHA_BD', 'NOME_BD');
		$connect = new mysqli($servername, $username, $password,$dbname);

		
		return $connect;
	}

	function angular(){

		$connect = new PDO("mysql:host=localhost;dbname=realmotos", "root", "");

     	return $connect ;


	}
}

?>
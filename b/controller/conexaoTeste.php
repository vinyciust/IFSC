		<?php
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "realmotos";

		//$conectaBD = new mysqli('localhost', 'USUARIO_BD', 'SENHA_BD', 'NOME_BD');
		$mysqli = new mysqli($servername, $username, $password,$dbname);

		if ($mysqli->connect_errno)
			echo "Falha na conexão: (".$mysqli->connect_errno.") ".$mysqli->connect_error;

		
		?>
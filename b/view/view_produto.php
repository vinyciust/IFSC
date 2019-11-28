<!DOCTYPE html>
<html>
<head>
	<title>aaaa</title>
</head>
<body>

	<?php 

		require_once ("../controller/motos_controller.php");




		//$Conn = new banco();
				//	$Conn->conexao();
					/*$sql = "SELECT nome FROM moto";
					//$Conn=$Conn->conexao()->query($sql);	
					$Conn = new mysqli("localhost", "root", "","realmotos");
				
					$result=$Conn->query($sql);

					while($row = $result->fetch_assoc()) {
        				 echo "<tr> ".$row["nome"]."</br>
        				         
        				                                         </tr>";}*/
		 $controller;
		$controller = new motoController();
		$controller()->drop();


	 ?>

</body>
</html>
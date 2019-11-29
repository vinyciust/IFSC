
<?php 
class dropModel{
	

	//CÃ³digo de conexÃ£o ao BD
	function  dropMoto(){
		require_once ("../model/banco.php");
		
		//$controller = new geraPaginaProduto();
		
		$Conn = new banco();
		$Conn=$Conn->conexao();
		$sql = "SELECT nome FROM moto";
		//$Conn = new mysqli("localhost", "root", "","realmotos");				
		$result=$Conn->query($sql);

		$axi='';
		
					while($row = $result->fetch_assoc()) {

						 $nome = $row["nome"];

		 if(file_exists("../controller/dropMotoController.php")) {

			$axi="../controller/dropMotoController.php?nome=$nome";

		} else {

			$axi="./controller/dropMotoController.php?nome=$nome";

		}

        	 	echo "
        	 	<a href=".$axi.">".$row["nome"]."</a>";}
        				 
        				// echo "<a href=".$nome." onClick=".$controller->pagina("$nome").">".$nome."</a>";}
        				 	
        				 $result->close();

//<a href="#">Link 1</a>

}

function  dropProduto(){
		require_once ("../model/banco.php");

		
		$Conn = new banco();
		$Conn=$Conn->conexao();
		$sql = "SELECT nome FROM produto";
		//$Conn = new mysqli("localhost", "root", "","realmotos");				
		$result=$Conn->query($sql);

					while($row = $result->fetch_assoc()) {
        				 echo "<a href='#'>".$row["nome"]."</a>";}

        				 $result->close();

//<a href="#">Link 1</a>

}function  dropServico(){
		require_once ("../model/banco.php");

		
		$Conn = new banco();
		$Conn=$Conn->conexao();
		$sql = "SELECT nome FROM servico";
		//$Conn = new mysqli("localhost", "root", "","realmotos");				
		$result=$Conn->query($sql);

					while($row = $result->fetch_assoc()) {
        				 echo "<a href='#'>".$row["nome"]."</a>";}

        				 $result->close();

//<a href="#">Link 1</a>

}

}
	

	 ?>

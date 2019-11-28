
<?php 
class drop{
	

	//CÃ³digo de conexÃ£o ao BD
	function  dropMoto(){
		require_once ("../model/banco.php");

		
		$Conn = new banco();
		$Conn=$Conn->conexao();
		$sql = "SELECT nome FROM moto";
		//$Conn = new mysqli("localhost", "root", "","realmotos");				
		$result=$Conn->query($sql);

					while($row = $result->fetch_assoc()) {
        				 echo "<a href='#'>".$row["nome"]."</a>";}

        				 $result->close();

//<a href="#">Link 1</a>

}}
	/*	$Conn = new banco();
		$Conn->conexao();
		$sql = "SELECT nome FROM moto";
		$Conn=$Conn->conexao()->query($sql);	
		$Conn = new mysqli("localhost", "root", "","realmotos");				
		$result=$Conn->query($sql);

					while($row = $result->fetch_assoc()) {
        				 echo "<tr> ".$row["nome"]."</br>   				         
        				   </tr>";}
		
*/

	 ?>

<?php 

class geraPaginaProduto{
	
	public $nome="";

	 public function setNome($nome) {  $this->nome= $nome;
	 	

  }	
	

}

    function  pagina($nome){


		require_once ("../model/banco.php");

		
		$Conn = new banco();
		$Conn=$Conn->conexao();
		$sql = "SELECT *FROM moto WHERE nome='".$nome."'";
		//$Conn = new mysqli("localhost", "root", "","realmotos");				
		$result=$Conn->query($sql);

					while($row = $result->fetch_assoc()) {
        				 echo "<p>".$row["nome"]."</p>"."<p>".$row["descricao"]."</p>";


        				}

        				 $result->close();
	}

	pagina("$nome");

?>
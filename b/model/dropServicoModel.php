<?php 
 
class geraPaginaProdutoModel{
	
	public $nome="";

	 public function setNome($nome) {  $this->$nome=$nome;  }

	 public function getNome() {
    return $this->nome;
}
    public function  pagina($nome){


		require_once ("../model/banco.php");

		
		$Conn = new banco();
		$Conn=$Conn->conexao();
		$sql = "SELECT *FROM servico WHERE nome='".$nome."'";
		//$Conn = new mysqli("localhost", "root", "","realmotos");				
		$result=$Conn->query($sql);

		$i=0;
		
			while($row = $result->fetch_assoc()) {
			if ($i==0){
				if(file_exists("../view/menu.php")) {

        	include '../view/menu.php';  		
        	}else{
        	include './view/menu.php'; 
        }		$i++;
			}
				
        				echo "<tr>
        <td>".$row["Nome"]."</td>
        <td>".$row["Descricao"]."</td> </br>
        
        </tr>";

        				}

        				 $result->close();
	}
 }	

	





 


?>
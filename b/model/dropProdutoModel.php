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
		$sql = "SELECT *FROM moto WHERE nome='".$nome."'";
		//$Conn = new mysqli("localhost", "root", "","realmotos");				
		$result=$Conn->query($sql);

					while($row = $result->fetch_assoc()) {
        				echo "<tr>
        <td>".$row["nome"]."</td>
        <td>".$row["idgrupo"]."</td>
        <td>".$row["valorLido"]." </td>
        <td>".$row["data"]."</td>
        <td>".$row["hora"]."</td>
        </tr>";

        				}

        				 $result->close();
	}
 }	

	





 


?>
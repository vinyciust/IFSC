<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<!--<form method="post" enctype="multipart/form-data">
		   Selecione uma imagem: <input name="arquivo" type="file" />
		   <br />
		   <input type="submit" value="Salvar" />
		</form>-->
		
		<?php 
			require_once("../model/banco.php");

			class Produto extends Banco{
				private $nome;
				private $descricao;
				private $valor;
				

				public function setNome($string) {
				$this->nome = $string;
				}
				public function setDescricao($string) {
				$this->descricao = $string;
				}
				public function setValor($string) {
				$this->valor = $string;
				}
				

				public function getNome() {
				return $this->nome;
				}
				public function getDescricao() {
				return $this->descricao;
				}
				public function getValor() {
				return $this->valor;
				}
				
								
				

				public function incluir(){
					$Conn = new banco();
					$Conn->conexao();

					$sql = "INSERT INTO produto (Nome, Descricao, Valor)"." VALUES ('".$this->getNome()."','".$this->getDescricao()."','".$this->getValor()."')";

					if (mysqli_query ($Conn->conexao(), $sql)) {
					     
					      echo "New record created successfully";
					      return "$sql";
					} else {
					      return $t= "Error: " . $sql . "<br>" . mysqli_error($Conn->conexao());

					       /*"$sql";*/
					}
					mysqli_close($Conn->conexao());

				}

			}

			

			

			//mkdir(__DIR__.'/nome_da_moto/', 0777, true);

		?>

	</body>
</html>


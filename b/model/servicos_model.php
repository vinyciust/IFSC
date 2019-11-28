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

			class Servicos extends Banco{
				private $titulo;
				private $descricao;
								

				public function setTitulo($string) {
				$this->titulo = $string;
				}
				public function setDescricao($string) {
				$this->descricao = $string;
				}
							

				public function getTitulo() {
				return $this->titulo;
				}
				public function getDescricao() {
				return $this->descricao;
				}
												
				

				public function incluir(){
					$Conn = new banco();
					$Conn->conexao();

					$sql = "INSERT INTO servico (Titulo, Descricao)"." VALUES ('".$this->getTitulo()."','".$this->getDescricao()."')";

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


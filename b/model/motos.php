<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<form method="post" enctype="multipart/form-data">
		   Selecione uma imagem: <input name="arquivo" type="file" />
		   <br />
		   <input type="submit" value="Salvar" />
		</form>
		
		<?php 
			require_once("../model/banco.php");

			class Motos extends Banco(){
				private $marca;
				private $valor;
				private $ano;
				private $descricao;

				public function setMarca($string) {
				$this->marca = $string;
				}
				public function setValor($string) {
				$this->valor = $string;
				}
				public function setAno($string) {
				$this->ano = $string;
				}
				public function setDescricao($string) {
				$this->descricao = $string;
				}

				public function getMarca() {
				return $this->marca;
				}
				public function getValor() {
				return $this->valor;
				}
				public function getAno() {
				return $this->ano;
				}
				public function getDescricao() {
				return $this->descricao;
				}

			}

			}

			$Conn = new banco();
			$Conn->conexao();

			public function incluir(){

				$sql = "INSERT INTO moto ( Marca, Valor, Ano, Descricao ) VALUES ('Xm', '20000', '2019', 'Uma moto top')";
				if (mysqli_query ($Conn->conexao(), $sql)) {
				      echo "New record created successfully";
				} else {
				      echo "Error: " . $sql . "<br>" . mysqli_error($Conn->conexao());
				}
				mysqli_close($Conn->conexao());
			}

			//mkdir(__DIR__.'/nome_da_moto/', 0777, true);

		?>

	</body>
</html>

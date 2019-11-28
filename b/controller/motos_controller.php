<?php 
require_once ("../model/motos_model.php");

class CadastroMotos {
	private $cadastro;

	public function __construct() {
		$this->cadastro = new Motos();

		$acao = $_POST['acao'];

		if($acao == "incluir") {
			$this->incluir();
		}
	}

	private function incluir() {
		$this->cadastro->setMarca($_POST['marca']);
		$this->cadastro->setValor($_POST['valor']);
		$this->cadastro->setAno($_POST['ano']);
		$this->cadastro->setDescricao($_POST['descricao']);
		$this->cadastro->setModelo($_POST['modelo']);
		$result = $this->cadastro->incluir();

		if($result >=1) {
			echo "<script>alert('Registro incluído com sucesso!');document.location='../index.php'</script>";
		} else {
			echo "<script>alert('$result Erro ao gravar registro!');history.back()</script>";
		}
	}

}
new CadastroMotos();
?>
<?php 
require_once ("../model/produto_model.php");

class CadastroProduto {
	private $cadastro;

	public function __construct() {
		$this->cadastro = new Produto();

		$acao = $_POST['acao'];

		if($acao == "incluir") {
			$this->incluir();
		}
	}

	private function incluir() {
		$this->cadastro->setNome($_POST['nome']);
		$this->cadastro->setDescricao($_POST['descricao']);
		$this->cadastro->setValor($_POST['valor']);
		$result = $this->cadastro->incluir();

		if($result >=1) {
			echo "<script>alert('Registro incluído com sucesso!');document.location='../index.php'</script>";
		} else {
			echo "<script>alert('$result Erro ao gravar registro!');history.back()</script>";
		}
	}

}
new CadastroProduto();
?>
<?php 
require_once ("../model/servicos_model.php");

class CadastroServicos {
	private $cadastro;

	public function __construct() {
		$this->cadastro = new Servicos();

		$acao = $_POST['acao'];

		if($acao == "incluir") {
			$this->incluir();
		}
	}

	private function incluir() {
		$this->cadastro->setTitulo($_POST['titulo']);
		$this->cadastro->setDescricao($_POST['descricao']);
		$result = $this->cadastro->incluir();

		if($result >=1) {
			echo "<script>alert('Registro incluído com sucesso!');document.location='../index.php'</script>";
		} else {
			echo "<script>alert('$result Erro ao gravar registro!');history.back()</script>";
		}
	}

}
new CadastroServicos();
?>
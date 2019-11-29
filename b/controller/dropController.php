<?php 
class drop{
	
	
	//CÃ³digo de conexÃ£o ao BD
	function  dropMoto(){
require_once ("../model/dropModel.php");
		$controller = new dropModel();
		$controller->dropMoto();

	}

function  dropProduto(){
require_once ("../model/dropModel.php");
		$controller = new dropModel();
		$controller->dropProduto();
}
function  dropServico(){



require_once ("../model/dropModel.php");
		$controller = new dropModel();
		$controller->dropServico();


}





}


?>
<?php 
class drop{
	
	
	//CÃ³digo de conexÃ£o ao BD
	function  dropMoto(){

		if(file_exists("../model/dropModel.php")) {

     require_once ("../model/dropModel.php");


    } else {

        require_once ("./model/dropModel.php");

    }
		$controller = new dropModel();
		$controller->dropMoto();

	}

function  dropProduto(){
if(file_exists("../model/dropModel.php")) {

     require_once ("../model/dropModel.php");


    } else {

        require_once ("./model/dropModel.php");

    }
		$controller = new dropModel();
		$controller->dropProduto();
}
function  dropServico(){



if(file_exists("../model/dropModel.php")) {

     require_once ("../model/dropModel.php");


    } else {

        require_once ("./model/dropModel.php");

    }
		$controller = new dropModel();
		$controller->dropServico();


}





}


?>
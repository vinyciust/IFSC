<?php 
 
class geraPaginaProduto{
	


 function setNome($nome) { 


require_once ("../model/dropProdutoModel.php");
  
	$Controller = new geraPaginaProdutoModel(); 
  	$Controller->setNome($nome); 
  	echo "$nome";
   }

function getNome() { 


require_once ("../model/dropProdutoModel.php");
  
	$Controller = new geraPaginaProdutoModel();

  	$nome = $Controller->getNome(); 

  	 return $nome;

   }


function  pagina($nome){

require_once ("../model/dropProdutoModel.php");
  
	$Controller = new geraPaginaProdutoModel();
 return	$nome = $Controller->pagina($nome); 



}





	}



$Controller = new geraPaginaProduto();  
$Controller->pagina($Controller->getNome());

?>
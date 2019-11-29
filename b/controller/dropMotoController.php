<?php 
 
class geraPaginaProduto{
	


 function setNome($nome) { 


require_once ("../model/dropMotoModel.php");
  
	$Controller = new geraPaginaProdutoModel(); 
  	$Controller->setNome($nome); 
  
   }

function getNome() { 


require_once ("../model/dropMotoModel.php");
  
	$Controller = new geraPaginaProdutoModel();

  	$nome = $Controller->getNome(); 

  	 return $nome;

   }


function  pagina($nome){

require_once ("../model/dropMotoModel.php");
  
	$Controller = new geraPaginaProdutoModel();
 return	$nome = $Controller->pagina($nome); 



}





	}


$nome=$_GET['nome'];
$Controller = new geraPaginaProduto();  
$Controller->pagina($nome);

?>
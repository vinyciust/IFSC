<?php 
class SalvaImagem {

        //require_once("../model/motos_model.php");
        public function setNome($nome_da_moto){

        require_once("../model/upImageModel.php");
        $controller = new SalvaImagemModel();
            $controller()->setNome($nome_da_moto);


        }

        public function getNome(){

        require_once("../model/upImageModel.php");
        $controller = new SalvaImagemModel();
          return  $controller()->getNome();


        }

 public function cmd($nome){
   require_once("../model/upImageModel.php");
   
        $controller = new SalvaImagemModel();
        $controller->imagens($nome);

}


}



$nome=$_GET['nomeMoto'];
$Controller = new SalvaImagem();  
$Controller->cmd($nome);

 ?>
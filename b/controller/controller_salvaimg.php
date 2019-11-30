<?php 
require_once("../model/upImageModel.php");

$controller = new SalvaImagemModel();

    class SalvaImagem {
    
        //require_once("../model/motos_model.php");
        public function setNome($nome_da_moto){

            $controller()->setNome($nome_da_moto);


        }

        public function getNome(){

          return  $controller()->getNome();


        }




}

$controller->imagens($controller->getNome());



 ?>
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


 public function cmd($nomeMoto){
   
           error_reporting(0);
           // include("conexaoTeste.php");
            
            //$msg = false;
            
            if($nomeMoto !=null){
              if(is_dir('../controller/imagens/$nomeMoto'))
                {
                   
                }
                else{
                        
                        mkdir("../controller/imagens/$nomeMoto", 0777, true);
                    }

                for ($i=0; $i <5 ; $i++) { 
                    # code...
                if (isset($_FILES['arquivo'.$i])) {

                    
                   
                    $extensao ='.png';  
                    $novo_nome = 'img' .$i.$extensao;
                       
                    
                    $diretorio = "../controller/imagens/$nomeMoto/";
                    

                    move_uploaded_file($_FILES['arquivo'.$i]['tmp_name'], $diretorio.$novo_nome);
        }
                    
                
    }

}


}

}



//$nomeMoto=$_GET['nomeMoto'];


//$Controller = new SalvaImagem();  
//$Controller->cmd($nomeMoto);

 ?>
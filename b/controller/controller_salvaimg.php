<?php 
class SalvaImagem {

      


 public function cmd($nome){
   
           error_reporting(0);
           // include("conexaoTeste.php");
            
            //$msg = false;
            
            if($nome !=null){
              if(is_dir('../controller/imagens/$nome'))
                {
                   
                }
                else{
                        
                        mkdir("../controller/imagens/$nome", 0777, true);
                    }

                for ($i=0; $i <5 ; $i++) { 
                    # code...
                if (isset($_FILES['arquivo'.$i])) {

                    
                   
                    $extensao ='.png';  
                    $novo_nome = 'img' .$i.$extensao;
                       
                    
                    $diretorio = "../controller/imagens/$nome/";
                    

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
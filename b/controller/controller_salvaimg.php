<?php 
class SalvaImagem {

      


 public function cmd($nome){
   
           error_reporting(0);

            if($nome !=null){
              if(is_dir('../view/img/$nome'))
                {
                   
                }
                else{
                        
                        mkdir("../view/img/$nome", 0777, true);
                    }

                for ($i=0; $i <5 ; $i++) { 
                    # code...
                    if (isset($_FILES['arquivo'.$i])) {

                        
                       
                        $extensao ='.png';  
                        $novo_nome = 'img' .$i.$extensao;
                           
                        
                        $diretorio = "../view/img/$nome/";
                        

                        move_uploaded_file($_FILES['arquivo'.$i]['tmp_name'], $diretorio.$novo_nome);
                    }
                }
            }
        }
    }
 
 ?>
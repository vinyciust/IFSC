 <?php
  
    class SalvaImagemModel {
     public $nome_da_moto="";
        //require_once("../model/motos_model.php");
        public function setNome($nome_da_moto){

               $nome_da_moto="";

            $this->$nome_da_moto=$nome_da_moto;
           
        }

          public function getNome() {
    return $this->$nome_da_moto;}

        public function imagens(){
           
            $nomeMoto = getNome();
             echo $this->$nomeMoto;
            include("conexaoTeste.php");
            
            //$msg = false;
            

              if(is_dir('../controller/imagens/$nomeMoto/'))
                {
                    echo 'A Pasta Existe';
                }
                else{
                        echo 'A Pasta não Existe';
                        mkdir(__DIR__."../controller/imagens/$nomeMoto", 0777, true);
                    }

                for ($i=0; $i <5 ; $i++) { 
                    # code...
                if (isset($_FILES['arquivo'.$i])) {

                    
                   
                    $extensao ='.png';  
                    $novo_nome = 'img' .$i.$extensao;
                       
                    
                    $diretorio = '../controller/imagens/$nomeMoto/';
                    

                    move_uploaded_file($_FILES['arquivo'.$i]['tmp_name'], $diretorio.$novo_nome);
        }
                    
                }

            
        }
    }
    
    
?>







































 <?php
    
    class SalvaImagem {
    
        //require_once("../model/motos_model.php");

        public function imagens(){
             
            include("conexaoTeste.php");
            
            //$msg = false;
            

             /* if(is_dir('imagens/nome_da_moto/'))
                {
                    echo 'A Pasta Existe';
                }
                else{
                        echo 'A Pasta não Existe';
                        mkdir(__DIR__."/imagens/nome_da_moto/", 0777, true);
                    }*/

                for ($i=0; $i <5 ; $i++) { 
                    # code...
                //if (isset($_FILES['arquivo'.$i])) {

                    
                   
                    $extensao ='.png';  
                    $novo_nome = 'img' .$i.$extensao;
                       
                    
                    $diretorio = 'imagens/nome_da_moto/';
                    

                    move_uploaded_file($_FILES['arquivo'.$i]['tmp_name'], $diretorio.$novo_nome);
        //}
                    
                }

            
        }
    }
    $msg = false;
    
?>

    <!--<h1>Upload de arquivos</h1>
    
    <?php if ($msg != false) {
        echo "<p> $msg </p>"; }

        
        $obj1 = new SalvaImagem();
        $obj1->imagens();
    ?>

    <form action="controller_salvaimg.php" method="POST" enctype="multipart/form-data">
        Arquivo: <input type="file" required name="arquivo0"> </br>
        Arquivo: <input type="file" required name="arquivo1"></br>
        Arquivo: <input type="file" required name="arquivo2"></br>
        Arquivo: <input type="file" required name="arquivo3"></br>
        Arquivo: <input type="file" required name="arquivo4"></br>
        Arquivo: <input type="file" required name="arquivo5"></br></br>
        <input type="submit" value="Salvar">


    </form> -->







































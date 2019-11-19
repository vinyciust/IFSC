    <?php
    
    include("conexaoTeste.php");
    
    $msg = false;
    

    
     for ($i=0; $i <5 ; $i++) { 
            # code...
        if (isset($_FILES['arquivo'.$i])) {
            
           
            $extensao =".png";
            $novo_nome = 'img' .$i.$extensao;
            //mkdir(__DIR__.'/imagens/nome_da_moto/', 0777, true);
            $diretorio = "imagens/nome_da_moto/";
            

            move_uploaded_file($_FILES['arquivo'.$i]['tmp_name'], $diretorio.$novo_nome);

            //$sql_code = "INSERT INTO arquivo (codigo, arquivo, data) VALUES(null, '$novo_nome', NOW())";

            //if ($mysqli->query($sql_code))
                //$msg = "Arquivo salvo com sucesso.";
            //else
               // $msg = "Erro ao enviar arquivo.";   
        }
    }
    
?>

    <h1>Upload de arquivos</h1>
    <?php if ($msg != false) echo "<p> $msg </p>"; ?>

    <form action="recebeUpload.php" method="post" enctype="multipart/form-data">
        Arquivo: <input type="file" required name="arquivo0"> </br>
        Arquivo: <input type="file" required name="arquivo1"></br>
        Arquivo: <input type="file" required name="arquivo2"></br>
        Arquivo: <input type="file" required name="arquivo3"></br>
        Arquivo: <input type="file" required name="arquivo4"></br>
        Arquivo: <input type="file" required name="arquivo5"></br></br>
        <input type="submit" value="Salvar">
    </form>







































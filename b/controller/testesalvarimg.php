<?php require_once("/controller_salvaimg.php"); ?>

<h1>Upload de arquivos</h1>
    
    <?php if ($msg != false) {
        echo "<p> $msg </p>"; }

        
        $obj1 = new SalvaImagem();
        $obj1->imagens();
    ?>

    <div align="right">
    <button type="button" name="add_button" ng-click="addData()" class="btn btn-success">Add</button>
   </div>

    <form action="testesalvarimg.php" method="POST" enctype="multipart/form-data">
        Arquivo: <input type="file" required name="arquivo0"> </br>
        Arquivo: <input type="file" required name="arquivo1"></br>
        Arquivo: <input type="file" required name="arquivo2"></br>
        Arquivo: <input type="file" required name="arquivo3"></br>
        Arquivo: <input type="file" required name="arquivo4"></br>
        Arquivo: <input type="file" required name="arquivo5"></br></br>
        <input type="submit" value="Salvar">


    </form>
 <?php 
include '.\menu.php';  ?>

<section id="Cadastros">   
    
    <article>
      <a href=".\viewCadastroMoto.php" class="button">Cadastro de Motos</a> 
    </article>
    <article>
      <a href=".\viewCadastroProduto.php" class="button">Cadastro de Produtos</a>
    </article>
    <article>
      <a href=".\viewCadastroServico.php" class="button">Cadastro de Serviços</a>
    </article>
</section>


 <style>
     #Cadastros section{
     
        background: white;
        width: 75%;
        float: left;
        margin-left: 14%;
        margin-top: 3%;

      }
      #Cadastros article{
        background: white;
        width: 32%;
        height: 310px;    
        float: left;
        margin: 3px;
        padding: 5px;
        padding-left: 9%;
      }
     #Cadastros .button {
        background-color: #333;
        border: none;
        color: white;
        padding: 30px 64px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
        margin-top: 50%;
      }
    </style>


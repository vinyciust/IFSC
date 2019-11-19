<?php  

include 'menu.php';

?>

<section id="Produto">

    <section id="Carrousel_view_motos">
      
        <!--carrossel-->

<div id="demo" class="carousel slide_produto" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner_produto">
    <div class="carousel-item active">
      <img src="img1.jpg" alt="Los Angeles">
      <div class="carousel-caption">
        <h3>CB 650 F -2016</h3>
        <p>💰30.900,00!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="img2.jpg" alt="Chicago">
      <div class="carousel-caption">
        <h3>CBROS 150</h3>
        <p>💰6.200,00!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="img3.jpg" alt="New York">
      <div class="carousel-caption">
        <h3>Fan 150</h3>
        <p>💰5.500,00!</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<section id="aside_carrousel">
  
    <article>
      <h3>Nome da Moto: </h3>
      <h3>Valor:</h3>
      <h3>Descrição</h3>

    </article>


    <article>
        
      <a href="index.php">COMPRAR</a> 


    </article>

 </section>
</section>




</section>
<?php

  
    include 'about.php'; 

    include 'footer.php';


?>
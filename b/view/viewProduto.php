<?php  

include 'menu.php';

?>

<section id="geral">
<section id="Produto">

    
      
        <!--carrossel-->

		
		

	

		

		

		

<!------ Include the above in your HEAD tag ---------->

<div class="container">
    <div class="row">

        <div class="col-md-9">
            <div id="carousel-main" class="carousel slide " data-ride="carousel" data-interval="5000">
                <!-- Carousel items -->
                <div class="carousel-inner">
                    <div class="active item">
                        <img src="img/cg150img1.jpg" class="img-responsive">
                    </div>
                    <div class="item">
                        <img src="img/cg150img2.jpg" class="img-responsive">
                    </div>
                    <div class="item">
                        <img src="img/cg150img3.jpg" class="img-responsive">
                    </div>
					
                </div>


                <!-- Controls -->
                <a class="left carousel-control" href=".carousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href=".carousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

        <div class="col-md-3">
            <div id="carousel-pager" class="carousel slide " data-ride="carousel" data-interval="1000">
                <!-- Carousel items -->
                <div class="carousel-inner vertical">
                    <div class="active item">
                        <img src="img/cg150img1.jpg" class="img-responsive" data-target="#carousel-main" data-slide-to="0">
                    </div>
                    <div class="item">
                        <img src="img/cg150img2.jpg" class="img-responsive" data-target="#carousel-main" data-slide-to="1">
                    </div>
                    <div class="item">
                        <img src="img/cg150img3.jpg" class="img-responsive" data-target="#carousel-main" data-slide-to="2">
                   </div>
                </div>
                
                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-pager" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-up" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-pager" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</div>





</section>


<section id="aside">

<article id="dados">
<h1>Nome do Produto: Honda Cg 150 Titan EX</h1>
<h3><p>Valor: R$7.900,00</p>
<p></p>
<p>Descrição:Partida Elétrica Publicação automática através do sistema Altimus. Ano
2013/2014.</br> Cor:
Azul</p></h3>
</article>

<article id="botaoCompra">



<button type="button" class="btn btn-light">   Comprar   </button>



</article>

</section>


</section>

<?php

  
    include 'about.php'; 

	include 'footer.php';
	

	


?>







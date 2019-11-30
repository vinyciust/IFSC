<?php  

include 'menu.php';

?>

<section id="Produto">



    <link rel="stylesheet" href="../src/css/lightslider.css">
    <style>
        ul{
            list-style: none outside none;
            padding-left: 0;
            margin: 0;
        }
        .demo .item{
            margin-bottom: 60px;
        }
        .content-slider li{
            background-color: #ed3020;
            text-align: center;
            color: #FFF;
        }
        .content-slider h3 {
            margin: 0;
            padding: 70px 0;
        }
        .demo{
            width: 800px;
        }
    </style>
    <script src="../src/js/lightslider.js"></script> 
    <script>
         $(document).ready(function() {
            $("#content-slider").lightSlider({
                loop:true,
                keyPress:true
            });
            $('#image-gallery').lightSlider({
                gallery:true,
                item:1,
                thumbItem:9,
                slideMargin: 0,
                speed:500,
                auto:true,
                loop:true,
                onSliderLoad: function() {
                    $('#image-gallery').removeClass('cS-hidden');
                }  
            });
        });
    </script>
<link type="text/css" rel="stylesheet" charset="UTF-8" href="https://translate.googleapis.com/translate_static/css/translateelement.css"></head>

    <div class="item">
    <div class="clearfix" style="max-width:474px;">
        <div class="lSSlideOuter ">
            <div class="lSSlideWrapper usingCss" style="transition-duration: 500ms; transition-timing-function: ease;">
                <ul id="image-gallery" class="gallery list-unstyled lightSlider lsGrab lSSlide" style="width: 8058px; transform: translate3d(-1422px, 0px, 0px); height: 343px; padding-bottom: 0%;">
                    <li data-thumb="../view/img/logo.png" class="clone left" style="width: 474px; margin-right: 0px;">
                        <img src="../view/img/1.jpeg">
                    </li>
                    <li data-thumb="../view/img/2.jpeg" class="lslide" style="width: 474px; margin-right: 0px;">
                        <img src="../view/img/2.jpeg">
                    </li>
                    <li data-thumb="../view/img/3.jpeg" class="lslide" style="width: 474px; margin-right: 0px;">
                        <img src="../view/img/3.jpeg">
                    </li>
                    <li data-thumb="../view/img/4.jpeg" class="lslide active" style="width: 474px; margin-right: 0px;">
                        <img src="../view/img/4.jpeg">
                    </li>                    
                    <li data-thumb="img/thumb/cS-1.jpg" class="clone right" style="width: 474px; margin-right: 0px;">
                        <img src="img/cS-1.jpg">
                    </li>
                </ul>
                <div class="lSAction">
                    <a class="lSPrev"></a>
                    <a class="lSNext"></a>
                </div>
            </div>
            
    </div>
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
<?php

  
    include 'about.php'; 

    include 'footer.php';


?>
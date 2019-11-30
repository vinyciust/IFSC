<?php  

include 'menu.php';

?>

<section id="Produtoa">

<meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link rel="stylesheet"  href="../src/css/lightslider.css"/>
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

    <div class="demo">
        <div class="item">            
            <div class="clearfix" style="">
                <ul id="image-gallery" class="gallery list-unstyled cS-hidden">
                    <li data-thumb="../view/img/3.jpeg"> 
                        <img src="../view/img/3.jpeg" />
                         </li>
                    <li data-thumb="../view/img/1.jpeg"> 
                        <img src="../view/img/1.jpeg" />
                         </li>
                    <li data-thumb="img/thumb/cS-3.jpg"> 
                        <img src="img/cS-3.jpg" />
                         </li>
                    <li data-thumb="img/thumb/cS-4.jpg"> 
                        <img src="img/cS-4.jpg" />
                         </li>
                    <li data-thumb="img/thumb/cS-5.jpg"> 
                        <img src="img/cS-5.jpg" />
                         </li>
                    <li data-thumb="img/thumb/cS-6.jpg"> 
                        <img src="img/cS-6.jpg" />
                         </li>
                    <li data-thumb="img/thumb/cS-7.jpg"> 
                        <img src="img/cS-7.jpg" />
                         </li>
                    <li data-thumb="img/thumb/cS-8.jpg"> 
                        <img src="img/cS-8.jpg" />
                         </li>
                    <li data-thumb="img/thumb/cS-9.jpg"> 
                        <img src="img/cS-9.jpg" />
                         </li>
                    <li data-thumb="img/thumb/cS-10.jpg"> 
                        <img src="img/cS-10.jpg" />
                         </li>
                    <li data-thumb="img/thumb/cS-11.jpg"> 
                        <img src="img/cS-11.jpg" />
                         </li>
                    <li data-thumb="img/thumb/cS-12.jpg"> 
                        <img src="img/cS-12.jpg" />
                         </li>
                    <li data-thumb="img/thumb/cS-13.jpg"> 
                        <img src="img/cS-13.jpg" />
                         </li>
                    <li data-thumb="img/thumb/cS-14.jpg"> 
                        <img src="img/cS-14.jpg" />
                         </li>
                    <li data-thumb="img/thumb/cS-15.jpg"> 
                        <img src="img/cS-15.jpg" />
                         </li>
                </ul>
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
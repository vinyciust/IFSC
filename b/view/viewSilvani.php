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
                    <li data-thumb="img/thumb/cS-15.jpg" class="clone left" style="width: 474px; margin-right: 0px;">
                        <img src="../view/img/1.jpeg">
                    </li>
                    <li data-thumb="img/thumb/cS-1.jpg" class="lslide" style="width: 474px; margin-right: 0px;">
                        <img src="../view/img/2.jpeg">
                    </li>
                    <li data-thumb="img/thumb/cS-2.jpg" class="lslide" style="width: 474px; margin-right: 0px;">
                        <img src="../view/img/3.jpeg">
                    </li>
                    <li data-thumb="img/thumb/cS-3.jpg" class="lslide active" style="width: 474px; margin-right: 0px;">
                        <img src="../view/img/4.jpeg">
                    </li>
                    <li data-thumb="img/thumb/cS-4.jpg" class="lslide" style="width: 474px; margin-right: 0px;">
                        <img src="img/cS-4.jpg">
                    </li>
                    <li data-thumb="img/thumb/cS-5.jpg" class="lslide" style="width: 474px; margin-right: 0px;">
                        <img src="img/cS-5.jpg">
                    </li>
                    <li data-thumb="img/thumb/cS-6.jpg" class="lslide" style="width: 474px; margin-right: 0px;">
                        <img src="img/cS-6.jpg">
                    </li>
                    <li data-thumb="img/thumb/cS-7.jpg" class="lslide" style="width: 474px; margin-right: 0px;">
                        <img src="img/cS-7.jpg">
                    </li>
                    <li data-thumb="img/thumb/cS-8.jpg" class="lslide" style="width: 474px; margin-right: 0px;">
                        <img src="img/cS-8.jpg">
                    </li>
                    <li data-thumb="img/thumb/cS-9.jpg" class="lslide" style="width: 474px; margin-right: 0px;">
                        <img src="img/cS-9.jpg">
                    </li>
                    <li data-thumb="img/thumb/cS-10.jpg" class="lslide" style="width: 474px; margin-right: 0px;">
                        <img src="img/cS-10.jpg">
                    </li>
                    <li data-thumb="img/thumb/cS-11.jpg" class="lslide" style="width: 474px; margin-right: 0px;">
                        <img src="img/cS-11.jpg">
                    </li>
                    <li data-thumb="img/thumb/cS-12.jpg" class="lslide" style="width: 474px; margin-right: 0px;">
                        <img src="img/cS-12.jpg">
                    </li>
                    <li data-thumb="img/thumb/cS-13.jpg" class="lslide" style="width: 474px; margin-right: 0px;">
                        <img src="img/cS-13.jpg">
                    </li>
                    <li data-thumb="img/thumb/cS-14.jpg" class="lslide" style="width: 474px; margin-right: 0px;">
                        <img src="img/cS-14.jpg">
                    </li>
                    <li data-thumb="img/thumb/cS-15.jpg" class="lslide" style="width: 474px; margin-right: 0px;">
                        <img src="img/cS-15.jpg">
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
            <ul class="lSPager lSGallery" style="margin-top: 5px; transition-duration: 500ms; width: 798.833px; transform: translate3d(0px, 0px, 0px);">
                <li style="width:100%;width:48.22222222222222px;margin-right:5px" class="">
                    <a href="#"><img src="../view/img/1.jpeg"></a>
                </li>
                <li style="width:100%;width:48.22222222222222px;margin-right:5px">
                    <a href="#"><img src="../view/img/2.jpeg"></a>
                </li>
                <li style="width:100%;width:48.22222222222222px;margin-right:5px" class="active">
                    <a href="#"><img src="../view/img/3.jpeg"></a>
                </li>
                <li style="width:100%;width:48.22222222222222px;margin-right:5px">
                    <a href="#"><img src="../view/img/4.jpeg"></a>
                </li>
                <li style="width:100%;width:48.22222222222222px;margin-right:5px">
                    <a href="#"><img src="img/thumb/cS-5.jpg"></a>
                </li>
                <li style="width:100%;width:48.22222222222222px;margin-right:5px">
                    <a href="#"><img src="img/thumb/cS-6.jpg"></a>
                </li>
                <li style="width:100%;width:48.22222222222222px;margin-right:5px">
                    <a href="#"><img src="img/thumb/cS-7.jpg"></a>
                </li>
                <li style="width:100%;width:48.22222222222222px;margin-right:5px">
                    <a href="#"><img src="img/thumb/cS-8.jpg"></a>
                </li>
                <li style="width:100%;width:48.22222222222222px;margin-right:5px">
                    <a href="#"><img src="img/thumb/cS-9.jpg"></a>
                </li>
                <li style="width:100%;width:48.22222222222222px;margin-right:5px">
                    <a href="#"><img src="img/thumb/cS-10.jpg"></a>
                </li>
                <li style="width:100%;width:48.22222222222222px;margin-right:5px">
                    <a href="#"><img src="img/thumb/cS-11.jpg"></a>
                </li>
                <li style="width:100%;width:48.22222222222222px;margin-right:5px">
                    <a href="#"><img src="img/thumb/cS-12.jpg"></a>
                </li>
                <li style="width:100%;width:48.22222222222222px;margin-right:5px">
                    <a href="#"><img src="img/thumb/cS-13.jpg"></a>
                </li>
                <li style="width:100%;width:48.22222222222222px;margin-right:5px">
                    <a href="#"><img src="img/thumb/cS-14.jpg"></a>
                </li>
                <li style="width:100%;width:48.22222222222222px;margin-right:5px">
                    <a href="#"><img src="img/thumb/cS-15.jpg"></a>
                </li>
            </ul>
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
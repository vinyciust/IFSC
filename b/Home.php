<section id="carrosel">
<meta charset="utf-8">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <style>
  /* Make the image fully responsive */
  
  .slide{  width: 50%;}

  .carousel-inner img {
    width: 100%;
    height: 100%;
  }

  .carousel-inner h3, .carousel-inner p{
    color: white;
    text-shadow: 2px 0px 0px black, 
                 -2px 0px 0px black, 
                 0px 2px 0px black, 
                 0px -2px 0px black;
    
  }

  </style>
<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/1.jpeg" alt="Los Angeles">
      <div class="carousel-caption">
        <h3>CB 650 F -2016</h3>
        <p>💰30.900,00!</p>
      </div>   
    
    <div class="carousel-item">
      <img src="img/2.jpeg" alt="Chicago">
      <div class="carousel-caption">
        <h3>CBROS 150</h3>
        <p>💰6.200,00!</p>
      </div>   
    
    <div class="carousel-item">
      <img src="img/3.jpeg" alt="New York">
      <div class="carousel-caption">
        <h3>Fan 150</h3>
        <p>💰$5.500,00!</p>
      </div>   
   
   </div>
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
</section>

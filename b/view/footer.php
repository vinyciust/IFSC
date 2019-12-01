  <section id="footer">


  <!--
<footer class="w3-container w3-padding-64 w3-center w3-black w3-xlarge">
  <a href="#"><i class="fa fa-facebook-official"></i></a>
  <a href="#"><i class="fa fa-pinterest-p"></i></a>
  <a href="#"><i class="fa fa-twitter"></i></a>
  <a href="#"><i class="fa fa-flickr"></i></a>
  <a href="#"><i class="fa fa-linkedin"></i></a>
  <p class="w3-medium">

  
</footer>
-->
<?php 
 $logo= "";
if(file_exists("../img/logo.png")) {

          $logo ='../img/logo.png'; 
              
          }else{
          $logo ='./img/logo.png';
          
        }    ?>

<div class="footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-3">
            <p class="mb-4"><img src=<?php echo "$logo";?> alt="Image" class="img-fluid"></p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae nemo minima qui dolor, iusto iure.</p>  
            <p><a href="#">Learn More</a></p>
          </div>
          <div class="col-lg-3">
            <h3 class="footer-heading"><span>Nossa Empresa</span></h3>
            <ul class="list-unstyled">
                <li><a href="#">Sobre</a></li>
                <li><a href="#">Promoções</a></li>
                <li><a href="#">Produtos</a></li>
            </ul>
          </div>
          <div class="col-lg-3">
              <h3 class="footer-heading"><span>Nossos Serviços</span></h3>
              <ul class="list-unstyled">
                  <li><a href="#">Restauração de motos</a></li>
                  <li><a href="#">Manutenção</a></li>
                  <li><a href="#">Personalização</a></li>
              </ul>
          </div>
          <div class="col-lg-3">
              <h3 class="footer-heading"><span>Contatos</span></h3>
              <ul class="list-unstyled">
                  <li><a href="#"><i class="fa  fa-phone"></i> Telefone:(49) 0000-0000</a></li>
                  <li><a href="#"><i class="fa fa-facebook-official"></i> Facebook</a></li>
                  <li><a href="#"><i class="fa  fa-whatsapp"></i> Whats</a></li>
              </ul>
          </div>
        </div>

        <div class="row">
          <div class="col-12">
            <div class="copyright">
                <p>                   
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos os direitos reservados para EMI/2016.1
                    </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    </section>
    </body>
    </html>
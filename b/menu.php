<section>

<link  rel="stylesheet" type="text/css" href="http://realmotos.epizy.com/styleMENU.css">

<div class="topnav" id="myTopnav">
  <a id="logo"><i class="fa"><img src="https://imgur.com/a/fIQC0sK"/></i></a> <!-- Botar a logo via html e editar via css -->
  <a class="active" href="#"><i class="fa fa-fw fa-home"></i> Inicio</a> 
  <a href="#"><i class="fa fa-fw fa-info-circle" ></i> Sobre</a> 
  <a href="#"><i class="fa fa-fw fa-envelope"></i> Contatos</a> 
  <div class="dropdown">
    <button class="dropbtn">Serviço 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">Link 1</a>
      <a href="#">Link 2</a>
      <a href="#">Link 3</a>
    </div>
     </div> 
    <a href="#" id="login"><i class="fa fa-fw fa-user"></i> Login</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
    
 
</div>
<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>
</section>

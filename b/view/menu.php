<!doctype html>
<html>
<head>
  <title>Real Motos</title>
  <meta charset="utf-8">  


<link  rel="stylesheet" type="text/css" href="https://realmotosserver.000webhostapp.com/htdocs/styleINDEX.css">
<link  rel="stylesheet"  href="https://realmotosserver.000webhostapp.com/htdocs/styleMENU.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link  rel="stylesheet" type="text/css" href="https://realmotosserver.000webhostapp.com/htdocs/stylecarroselHOME.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="https://realmotosserver.000webhostapp.com/htdocs/styleABOUT.css">
<link href="https://fonts.googleapis.com/css?family=Oswald:300,400,700|Muli:300,400" rel="stylesheet">
<link  rel="stylesheet" type="text/css" href="https://realmotosserver.000webhostapp.com/htdocs/styleFooter.css">
<link  rel="stylesheet" type="text/css" href="https://realmotosserver.000webhostapp.com/htdocs/styleCarroselTesteIndex.css">



<!-- Algular -->

    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular.min.js"></script>
    <script src="https://realmotosserver.000webhostapp.com/htdocs/Angularjs/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="https://realmotosserver.000webhostapp.com/htdocs/Angularjs/jquery.dataTables.min.css">
    <script src="https://realmotosserver.000webhostapp.com/htdocs/Angularjs/angular-datatables.min.js"></script>
    <link rel="stylesheet" href="https://realmotosserver.000webhostapp.com/htdocs/Angularjs/datatables.bootstrap.css">

   
   

</head>

<body style="color: black">

<header id="Menu">


<nav class="MenuNavReal">
 <a id="logo"><i class="fa"><img src="https://scontent.fxap3-1.fna.fbcdn.net/v/t1.0-9/27973392_358211404681466_4613216062072862129_n.png?_nc_cat=104&_nc_ohc=ETe50krQSEUAQkQjJlwcikGWGZllToPbpHONt2TS6kNn6hgGVvTcmHkCA&_nc_ht=scontent.fxap3-1.fna&oh=b3913bcbd9e83c8d455decbdfab87ea8&oe=5E835125"/></i></a> <!-- Botar a logo via html e editar via css -->
  <a href="#home">Home</a>
  <a href="#news">News</a>
  <div class="dropdownReal">
    <button class="dropbtnReal">Motos 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdownReal-content">
      <?php require_once ("../controller/dropController.php");

      $obj = new drop();
      $obj->dropMoto();

      ?>
    </div>
  </div> 
  <div class="dropdownReal">
    <button class="dropbtnReal">Produtos 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdownReal-content">
      <?php require_once ("../controller/dropController.php");

      $obj = new drop();
      $obj->dropProduto();

      ?>
    </div>
  </div> 
  <div class="dropdownReal">
    <button class="dropbtnReal">Serviços 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdownReal-content">
      <?php require_once ("../controller/dropController.php");

      $obj = new drop();
      $obj->dropServico();

      ?>
    </div>
  </div> 
  <a href="#" id="login"><i class="fa fa-fw fa-user"></i> Login</a>

</nav>

<form method="POST" action="" name="form1">

    <<?php alert('Email enviado com Sucesso!'); ?>

    <input type="hidden" name="acao" value="incluir">
    
    <input type="submit" value="Cadastrar">
  </form>

</header>

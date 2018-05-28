<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	<link rel="stylesheet" href="<?=base_url()?>/assets/css/main.css">
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> <!--Jquery Import-->
  <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script> <!--Bootstrap 4 Import-->
  <script src="<?=base_url()?>/assets/node_modules/angular/angular.js"></script> <!--AngularJS Import-->
  <script src="<?=base_url()?>/assets/node_modules/angular-animate/angular-animate.js"></script> <!--Angular Material Dependency (Animations) Import-->
  <script src="<?=base_url()?>/assets/node_modules/angular-aria/angular-aria.js"></script> <!--Angular Material Dependency (Accessibility) Import-->
  <script src="<?=base_url()?>/assets/node_modules/angular-messages/angular-messages.js"></script> <!--Angular Material Dependency (Angular Messages) Import--> 
  <script src="<?=base_url()?>/assets/node_modules/angular-material/angular-material.js"></script> <!--Angular Material Import-->
  <script type="text/javascript" src="https://use.fontawesome.com/574c45c449.js"></script> <!--Font Awesome Import-->
	<script type="text/javascript" src="<?=base_url()?>/assets/js/main.js"></script>
	<title>Pet Stop</title>	
</head>
<body>
  <div class="wrapper"> <!--wrapper da pagina para determinar a grid-->

    <!--Navbar section-->
    <header>
      <nav class="navbar navbar-toggleable-md navbar-inverse fixed-top">
        <!--Menu Colapsado-->
        <button class="navbar-toggler navbar-toggler-right hidden-lg-up" type="button" data-toggle="collapse" data-target="#navbarMenu" aria-controls="navbarMenu" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <!--Logo-->
        <a class="navbar-brand" href="<?=base_url()?>main/index"><img src="<?=base_url()?>/assets/imagens/logo-borda.png"> Pet Stop</a>
        <!--Menu Central-->
        <div class="collapse navbar-collapse" id="navbarMenu">        
          <ul class="navbar-nav ml-auto">
            <li class="nav-item nav-menu active">
              <a class="nav-link" href="<?=base_url();?>main/index">Home<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item nav-menu">
              <a class="nav-link" href="<?=base_url();?>main/contato">Contato<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item nav-menu">
              <a class="nav-link" href="#">Blog<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item nav-menu">
              <a class="nav-link" href="<?=base_url();?>main/about">Sobre Nós<span class="sr-only">(current)</span></a>
            </li>
          </ul>
        </div>
        <!--Menu Lateral-->
        <div class="collapse navbar-collapse" id="navbarButtons">
          <div class="mt-md-0 mx-auto"></div>
          <ul class="navbar-nav">        
            <li class="nav-item" id="search-button">
              <a class="nav-link" href="#">
                <i class="fa fa-search fa-2x" aria-hidden="true"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?=base_url()?>carrinho">
                <img src="<?=base_url()?>/assets/imagens/shopping-cart.png" alt="Shop-Cart">   
              </a>      
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?=base_url()?>user_authentication/index">
                <i class="fa fa-user-circle fa-2x" aria-hidden="true"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?=base_url()?>logout">
                <i class="fa fa-sign-out fa-2x" aria-hidden="true"></i>
              </a>
            </li>
          </ul>        
        </div>
      </nav>
    </header>


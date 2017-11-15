<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	<link rel="stylesheet" href="../../../assets/css/produto.css">
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> <!--Jquery Import-->
  <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script> <!--Bootstrap 4 Import-->
  <script src="../../../assets/node_modules/angular/angular.js"></script> <!--AngularJS Import-->
  <script src="../../../assets/node_modules/angular-animate/angular-animate.js"></script> <!--Angular Material Dependency (Animations) Import-->
  <script src="../../../assets/node_modules/angular-aria/angular-aria.js"></script> <!--Angular Material Dependency (Accessibility) Import-->
  <script src="../../../assets/node_modules/angular-messages/angular-messages.js"></script> <!--Angular Material Dependency (Angular Messages) Import--> 
  <script src="../../../assets/node_modules/angular-material/angular-material.js"></script> <!--Angular Material Import-->
  <script type="text/javascript" src="https://use.fontawesome.com/574c45c449.js"></script> <!--Font Awesome Import-->
	<script type="text/javascript" src="../../../assets/js/produto.js"></script>
	<title>Teste</title>	
</head>
<body>
<!--Navbar section-->
  <header>
    <nav class="navbar navbar-toggleable-md navbar-inverse fixed-top">
      <!--Menu Colapsado-->
      <button class="navbar-toggler navbar-toggler-right hidden-lg-up" type="button" data-toggle="collapse" data-target="#navbarMenu" aria-controls="navbarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
      <!--Logo"-->
      <a class="navbar-brand" href="#"><img src="../../../assets/imagens/logoVermelho3.png" width="10%"> Pet Stop</a>
      <!--Menu Central-->
      <div class="collapse navbar-collapse" id="navbarMenu">        
        <ul class="navbar-nav ml-auto">
          <li class="nav-item nav-menu active">
            <a class="nav-link" href="../main/main.php">Home<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item nav-menu">
            <a class="nav-link" href="../contato/contato.php">Contato<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item nav-menu">
            <a class="nav-link" href="#">Blog<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item nav-menu">
            <a class="nav-link" href="#">Sobre Nós<span class="sr-only">(current)</span></a>
          </li>
        </ul>
        <!--Botões Laterais-->
        <div class="mt-md-0 ml-auto"></div>
        <ul class="navbar-nav">        
         <li class="nav-item" id="searchButton">
            <a class="nav-link" href="#">
            <i class="fa fa-search fa-2x" aria-hidden="true"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
            <img src="../../../assets/imagens/shopping-cart.png" alt="Shop-Cart">   
            </a>      
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../login/login.php">
            <i class="fa fa-user-circle fa-2x" aria-hidden="true"></i>
            </a>
          </li>
        </ul>        
      </div>
    </nav>
  </header>
  <div class="container">
    <section class="top-margin medium-padding">
        <div class="row">
          <div class="col-md-6 col-sm-6 col-xs-12 text-center">
            <img src="../../../assets/imagens/acesso_background.jpg">
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12 text-left">
            <div>
              <h1>Nome do Produto</h1>
            </div>
            <div class="form-group col-md-12 single-border small-padding full-width padding-top">
              <h3>Preço</h3>
              <select id="quantidadeProdutos" name="quantidadeProdutos" class="form-control" ng-model="sexo" required>
                <option value="" disabled selected>Quantidade</option>
              </select>
              <button class="btn btn-danger">Comprar</button>
            </div>
            <div>
              <h2>Descrição Produto</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
          </div>
        </div>
    </section>
  </div>
  
</body>
</html>
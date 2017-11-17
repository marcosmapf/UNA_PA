<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	<link rel="stylesheet" href="../../../assets/css/produto.css">
	<title>Teste</title>	
</head>
<body ng-app="appModule" ng-cloak>
<!--Navbar section-->
  <header>
    <nav class="navbar navbar-toggleable-md navbar-inverse fixed-top">
      <!--Menu Colapsado-->
      <button class="navbar-toggler navbar-toggler-right hidden-lg-up" type="button" data-toggle="collapse" data-target="#navbarMenu" aria-controls="navbarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
      <!--Logo"-->
      <a class="navbar-brand" href="#"><img src="../../../assets/imagens/logo-borda.png" width="10%"> Pet Stop</a>
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
    <form name="produtoForm" ng-submit="" method="post" ng-controller="produtoController">
      <section class="top-margin medium-padding card">
          <div class="row">

            <div class="col-12 col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <img id="imagem-produto" ng-src="{{imagemProduto}}"></img>
            </div>

            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12">
              <div class="medium-margin">
                <div>
                  <h2>{{nomeProduto}}</h2>
                </div>

                <div class="single-border small-padding text-center">
                  <p><strong>Vendido e entregue por PetStop</strong></p>
                  <h3>R$ {{precoProduto}}</h3><br>
                  <!--
                  <select name="quantidadeProdutos" ng-model="quantidadeSelecionada" required>
                    <option ng-repeat="option in quantidadeProdutos" ng-value="option.value">{{option.name}}</option>
                  </select></br></br>
                  -->
                  <button class="btn btn-danger" width="200%">Comprar</button><br><br>
                  <div class="info-pagamento text-left">
                    <img src="../../../assets/imagens/cartao-credito.png" width="8%"> R$ {{precoProduto*0.9 | number : 2}} no boleto bancário (10% de desconto)
                    <p><img src="../../../assets/imagens/codigo-barras.png"  width="8%"> R$ {{precoProduto | number : 2}} em até 8x de {{precoProduto/8  | number : 2}} sem juros</p>
                  </div>
                </div>              
                <div>
                  <br><p>Com o Bebedouro Prático, sempre que o nível de água baixar, é reabastecido automaticamente pelo reservatório que precisa conter água.<br/><br/>É ideal para animais de pequeno porte.<br/><br/>Desmontável, facilita a higienização e abastecimento</p>
                </div>
              </div>
            </div>
          </div>
      </section>
    </form>
  </div>
  <footer class="d-inline-flex">
      <!--<img src="../../../assets/imagens/logoVermelho3.png" width="2.5%">-->
      <div class="mr-auto p-2">
        <div></div>
      </div>
      <div class="mx-auto p-2">
        <div><img class="img-fluid" src="../../../assets/imagens/logo-pequena.png"> Pet Stop</div>
      </div>
      <div class="ml-auto p-2">
        <div>
          <a href="" id="facebook_connection" ng-click="">
            <i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i>
            <i class="fa fa-twitter fa-2x" aria-hidden="true"></i>
          </a>
        </div>
      </div>
  </footer>  
</body>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> <!--Jquery Import-->
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script> <!--Bootstrap 4 Import-->
<script src="../../../assets/node_modules/angular/angular.js"></script> <!--AngularJS Import-->
<script type="text/javascript" src="https://use.fontawesome.com/574c45c449.js"></script> <!--Font Awesome Import-->
<script type="text/javascript" src="../../../assets/js/produto.js"></script> <!--Local Javascript Import-->
</html>
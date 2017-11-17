<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	<link rel="stylesheet" href="../../../assets/css/main.css">
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> <!--Jquery Import-->
  <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script> <!--Bootstrap 4 Import-->
  <script src="../../../assets/node_modules/angular/angular.js"></script> <!--AngularJS Import-->
  <script src="../../../assets/node_modules/angular-animate/angular-animate.js"></script> <!--Angular Material Dependency (Animations) Import-->
  <script src="../../../assets/node_modules/angular-aria/angular-aria.js"></script> <!--Angular Material Dependency (Accessibility) Import-->
  <script src="../../../assets/node_modules/angular-messages/angular-messages.js"></script> <!--Angular Material Dependency (Angular Messages) Import--> 
  <script src="../../../assets/node_modules/angular-material/angular-material.js"></script> <!--Angular Material Import-->
  <script type="text/javascript" src="https://use.fontawesome.com/574c45c449.js"></script> <!--Font Awesome Import-->
	<script type="text/javascript" src="../../../assets/js/main.js"></script>
	<title>Teste</title>	
</head>
<body>
<!--Navbar section-->
<div class="container">
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
            <a class="nav-link" href="<?=base_url?>/application/views/main/main.php">Home<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item nav-menu">
            <a class="nav-link" href="<?=base_url?>/application/views/contato/contato.php">Contato<span class="sr-only">(current)</span></a>
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
            <a class="nav-link" href="<%=base_url()%>/user_authentication/index">
              <i class="fa fa-user-circle fa-2x" aria-hidden="true"></i>
            </a>
          </li>
        </ul>        
      </div>
    </nav>
  </header>

  <!--Carousel Section-->
  <section>
    <div class="carousel-fade">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
          <div class="carousel-item active">
              <img class="d-block img-fluid" src="../../../assets/imagens/banner01.webp" alt="Primeiro banner">
          </div>
          <div class="carousel-item">
            <img class="d-block img-fluid" src="../../../assets/imagens/banner02.webp" alt="Segundo banner">
          </div>
          <div class="carousel-item">
            <img class="d-block img-fluid" src="../../../assets/imagens/banner03.webp" alt="Terceiro banner">
          </div>
          <div class="carousel-item">
            <img class="d-block img-fluid" src="../../../assets/imagens/banner04.webp" alt="Quarto banner">
          </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
          </a>
      </div>
    </div>
  </section>

    <!--Item Grid Section-->

    <section>
      <div class="teste1 col-md-12 col-sm-12 col-xs-12">
          <div class="row">
            <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-xs-12 col-12">
              <a href="<?=base_url?>/application/views/produto/produto.php">
                <img src="../../../assets/imagens/produtos/bebedouro-prático-automático-cães-e-gatos-azul-alvorada.webp">
              </a>
              <h5>Bebedouro Prático Automático Cães e Gatos Azul Alvorada</h5>
              <p>a partir de: R$ 21,99</p>
            </div>
             <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-xs-12 col-12">
              <img src="../../../assets/imagens/produtos/brinquedo-cenoura-nylon-buddy-toys.webp">
              <h5>Brinquedo Cenoura Nylon Buddy Toys</h5>
              <p>a partir de: R$ 37,90</p>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-xs-12 col-12">
              <img src="../../../assets/imagens/produtos/brinquedo-para-gatos-com-catNip-jambo.webp">
              <h5>Brinquedo para Gatos com CatNip Jambo</h5>
              <p>a partir de: R$ 18,50</p>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-xs-12 col-12">
              <img src="../../../assets/imagens/produtos/butox-20-ml-pulverização-intervet.webp">
              <h5>Butox 20 ml Pulverização Intervet</h5>
              <p>a partir de: R$ 5,90</p>
            </div> 
            <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-xs-12 col-12">
              <img src="../../../assets/imagens/produtos/cama-suiça-bege-bichinho-chic.webp">
              <h5>Cama Suiça Bege Bichinho Chic</h5>
              <p>a partir de: R$ 51,90</p>
            </div>
             <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-xs-12 col-12">
              <img src="../../../assets/imagens/produtos/casa-mega-fácil-azul-alvorada.webp">
              <h5>Casa Mega Fácil Azul Alvorada</h5>
              <p>a partir de: R$ 89,90</p>
            </div>
             <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-xs-12 col-12">
              <img src="../../../assets/imagens/produtos/cat-nip-120-ml-petmais.webp">
             <h5>Cat Nip 120 ml Petmais</h5>
              <p>a partir de: R$ 20,50</p>
            </div>  
            <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-xs-12 col-12">
              <img src="../../../assets/imagens/produtos/coleira-antipulgas-leevre-25,5g-48cm-ourofino.webp">
              <h5>Coleira Antipulgas Leevre 25,5g 48cm Ourofino</h5>
              <p>a partir de: R$ 105,90</p>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-xs-12 col-12">
              <img src="../../../assets/imagens/produtos/petisco-doguitos-rodízio-linguicinha-purina-45g.webp">
             <h5>Petisco Doguitos Rodízio Linguicinha Purina - 45g</h5>
              <p>a partir de: R$ 4,90</p>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-xs-12 col-12">
              <img src="../../../assets/imagens/produtos/petisco-keldog-bifinho-de-carne-e-vegetais-kelco-55g.webp">
              <h5>Petisco Keldog Bifinho de Carne e Vegetais Kelco - 55 g</h5>
              <p>a partir de: R$ 3.50</p>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-xs-12 col-12">
              <img src="../../../assets/imagens/produtos/ração-premier-nutrição-clínica-cães-cardio-2kg.webp">
             <h5>Ração Premier Nutrição Clínica Cães Cardio - 2kg</h5>
              <p>a partir de: R$ 62,90</p>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-xs-12 col-12">
              <img src="../../../assets/imagens/produtos/neodexa-spray-74g-coveli.webp">
              <h5>Neodexa Spray 74 g Coveli - Neodexa Spray 74g Coveli</h5>
              <p>a partir de: R$ 55,90</p>
            </div>
          </div>
      </div>
    </section>
  </div>
</body>
</html>
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
        <a class="navbar-brand" href="#"><img src="<?=base_url()?>/assets/imagens/logo-borda.png"> Pet Stop</a>
        <!--Menu Central-->
        <div class="collapse navbar-collapse" id="navbarMenu">        
          <ul class="navbar-nav ml-auto">
            <li class="nav-item nav-menu active">
              <a class="nav-link" href="<?=base_url();?>/index.php/main/index">Home<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item nav-menu">
              <a class="nav-link" href="<?=base_url();?>/index.php/main/contato">Contato<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item nav-menu">
              <a class="nav-link" href="#">Blog<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item nav-menu">
              <a class="nav-link" href="<?=base_url();?>/index.php/main/about">Sobre Nós<span class="sr-only">(current)</span></a>
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
              <a class="nav-link" href="#">
                <img src="<?=base_url()?>/assets/imagens/shopping-cart.png" alt="Shop-Cart">   
              </a>      
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?=base_url();?>/index.php/user_authentication/index">
                <i class="fa fa-user-circle fa-2x" aria-hidden="true"></i>
              </a>
            </li>
          </ul>        
        </div>
      </nav>
    </header>

    <!--Carousel Section-->
    <section id="carousel-grid">
      <div id="page-carousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#page-carousel" data-slide-to="0" class="active"></li>
            <li data-target="#page-carousel" data-slide-to="1"></li>
            <li data-target="#page-carousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <div class="carousel-item active">
              <img class="d-block img-fluid" src="<?=base_url()?>/assets/imagens/banner01.webp" alt="Primeiro banner">
          </div>
          <div class="carousel-item">
            <img class="d-block img-fluid" src="<?=base_url()?>/assets/imagens/banner02.webp" alt="Segundo banner">
          </div>
          <div class="carousel-item">
            <img class="d-block img-fluid" src="<?=base_url()?>/assets/imagens/banner03.webp" alt="Terceiro banner">
          </div>
          <div class="carousel-item">
            <img class="d-block img-fluid" src="<?=base_url()?>/assets/imagens/banner04.webp" alt="Quarto banner">
          </div>
        </div>
        <a class="carousel-control-prev" href="#page-carousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#page-carousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
      </div>
    </section>


    <main class="container" id="produtos-grid">  <!--Container para os produtos da loja -->


      <div id="produtos-destaque-titulo-grid">
        <h5 class="text-center">Mais Vendidos</h5>
        <hr>
      </div>

      <div id="produtos-destaque-grid" class="row">

        <div class="card bordered">
          <div>
            <a href="<?=base_url()?>/index.php/produto/visualizar/17">
              <img class="card-img-top" src="<?=base_url()?>/assets/imagens/produtos/cama-suiça-bege-bichinho-chic.jpg" alt="Imagem Produto">
            </a>
          </div>
          <div class="card-block">
            <h5 class="card-text">Cama Suiça Bege Bichinho Chic</h5>
            <p class="card-text">a partir de: R$ 51,90</p>
          </div>
        </div>

        <div class="card bordered">
          <div>
            <a href="<?=base_url()?>index.php/produto/visualizar/1">
              <img class="card-img-top" src="<?=base_url()?>/assets/imagens/produtos/racao-whiskas-gatos-castrados-carne.jpg" alt="Imagem Produto">
            </a>
          </div>
          <div class="card-block">
            <h5 class="card-text">Ração Whiskas Gatos Castrados Carne</h5>
            <p class="card-text">a partir de: R$ 11,99</p>
          </div>
        </div>

        <div class="card bordered">
          <div>
            <a href="<?=base_url()?>index.php/produto/visualizar/5">
              <img class="card-img-top" src="<?=base_url()?>/assets/imagens/produtos/brinquedo-cenoura-nylon-buddy-toys.jpg" alt="Imagem Produto">
            </a>
          </div>
          <div class="card-block">
            <h5 class="card-text">Brinquedo Cenoura Nylon Buddy Toys</h5>
            <p class="card-text">a partir de: R$ 37,90</p>
          </div>
        </div>

      </div>  

      <div id="produtos-caes-titulo-grid">   <!-- Sub-grid de produtos para caes -->  
        <h5>Produtos Para Cães</h5>
        <hr>
      </div>

      <div id="produtos-caes-grid">   
        
      <div class="card">
        <div>
          <a href="<?=base_url()?>index.php/produto/visualizar/2">
            <img class="card-img-top" src="<?=base_url()?>/assets/imagens/produtos/bebedouro-prático-automático-cães-e-gatos-azul-alvorada.jpg" alt="Imagem Produto">
          </a>
        </div>
        <div class="card-block">
          <h5 class="card-text">Bebedouro Prático Automático Cães e Gatos Azul Alvorada</h5>
          <p class="card-text">a partir de: R$ 21,99</p>
        </div>
      </div>


      <div class="card">
        <div>
          <a href="<?=base_url()?>index.php/produto/visualizar/5">
            <img class="card-img-top" src="<?=base_url()?>/assets/imagens/produtos/brinquedo-cenoura-nylon-buddy-toys.jpg" alt="Imagem Produto">
          </a>
        </div>
        <div class="card-block">
          <h5 class="card-text">Brinquedo Cenoura Nylon Buddy Toys</h5>
          <p class="card-text">a partir de: R$ 37,90</p>
        </div>
      </div>


      <div class="card">
        <div>
          <a href="<?=base_url()?>index.php/produto/visualizar/17">
            <img class="card-img-top" src="<?=base_url()?>/assets/imagens/produtos/cama-suiça-bege-bichinho-chic.jpg" alt="Imagem Produto">
          </a>
        </div>
        <div class="card-block">
          <h5 class="card-text">Cama Suiça Bege Bichinho Chic</h5>
          <p class="card-text">a partir de: R$ 51,90</p>
        </div>
      </div>


      <div class="card">
        <div>
          <a href="<?=base_url()?>index.php/produto/visualizar/4">
            <img class="card-img-top" src="<?=base_url()?>/assets/imagens/produtos/casa-mega-fácil-azul-alvorada.jpg" alt="Imagem Produto">
          </a>
        </div>
        <div class="card-block">
          <h5 class="card-text">Casa Mega Fácil Azul Alvorada</h5>
          <p class="card-text">a partir de: R$ 89,90</p>
        </div>
      </div>

      <div class="card">
        <div>
          <a href="<?=base_url()?>index.php/produto/visualizar/9">
            <img class="card-img-top" src="<?=base_url()?>/assets/imagens/produtos/coleira-antipulgas-leevre-25,5g-48cm-ourofino.jpg" alt="Imagem Produto">
          </a>
        </div>
        <div class="card-block">
          <h5 class="card-text">Coleira Antipulgas Leevre 25,5g 48cm Ourofino</h5>
          <p class="card-text">a partir de: R$ 105,90</p>
        </div>
      </div>

      <div class="card">
        <div>
          <a href="<?=base_url()?>index.php/produto/visualizar/11">
            <img class="card-img-top" src="<?=base_url()?>/assets/imagens/produtos/ração-premier-nutrição-clínica-cães-cardio-2kg.jpg" alt="Imagem Produto">
          </a>
        </div>
        <div class="card-block">
          <h5 class="card-text">Ração Premier Nutrição Clínica Cães Cardio - 2kg</h5>
          <p class="card-text">a partir de: R$ 62,90</p>
        </div>
      </div>
      
      
      </div>
      
      <div id="produtos-gatos-titulo-grid">   <!-- Sub-grid de produtos para gatos -->
        <h5>Produtos Para Gatos</h5>
        <hr>
      </div>

      <div id="produtos-gatos-grid">      

        <div class="card">
          <div>
            <a href="<?=base_url()?>/index.php/produto/visualizar/15">
              <img class="card-img-top" src="<?=base_url()?>/assets/imagens/produtos/cat-nip-120-ml-petmais.jpg" alt="Imagem Produto">
            </a>
          </div>
          <div class="card-block">
            <h5 class="card-text">Cat Nip 120 ml Petmais</h5>
            <p class="card-text">a partir de: R$ 20,50</p>
          </div>
        </div>

        <div class="card">
          <div>
            <a href="<?=base_url()?>/index.php/produto/visualizar/16">
              <img class="card-img-top" src="<?=base_url()?>/assets/imagens/produtos/brinquedo-para-gatos-com-catnip-jambo.jpg" alt="Imagem Produto">
            </a>
          </div>
          <div class="card-block">
            <h5 class="card-text">Brinquedo para Gatos com CatNip Jambo</h5>
            <p class="card-text">a partir de: R$ 18,50</p>
          </div>
        </div>

        <div class="card">
          <div>
            <a href="<?=base_url()?>/index.php/produto/visualizar/1">
              <img class="card-img-top" src="<?=base_url()?>/assets/imagens/produtos/racao-whiskas-gatos-castrados-carne.jpg" alt="Imagem Produto">
            </a>
          </div>
          <div class="card-block">
            <h5 class="card-text">Ração Whiskas Gatos Castrados Carne</h5>
            <p class="card-text">a partir de: R$ 11,99</p>
          </div>
        </div>

        <div class="card">
          <div>
            <a href="<?=base_url()?>/index.php/produto/visualizar/6">
              <img class="card-img-top" src="<?=base_url()?>/assets/imagens/produtos/racao-hills-felino-senior-11-age-defying-3kg.jpg" alt="Imagem Produto">
            </a>
          </div>
          <div class="card-block">
            <h5 class="card-text">Ração Hill's Felino Senior 11+ Age Defying - 3kg</h5>
            <p class="card-text">a partir de: R$ 127,90</p>
          </div>
        </div>

        <div class="card">
          <div>
            <a href="<?=base_url()?>/index.php/produto/visualizar/2">
              <img class="card-img-top" src="<?=base_url()?>/assets/imagens/produtos/bebedouro-prático-automático-cães-e-gatos-vermelho-alvorada.jpg" alt="Imagem Produto">
            </a>
          </div>
          <div class="card-block">
            <h5 class="card-text">Bebedouro Prático Automático Cães e Gatos Vermelho Alvorada</h5>
            <p class="card-text">a partir de: R$ 21,99</p>
          </div>
        </div>

        <div class="card">
          <div>
            <a href="<?=base_url()?>/index.php/produto/visualizar/18">
              <img class="card-img-top" src="<?=base_url()?>/assets/imagens/produtos/rasqueadeira-pratica-vermelha-chalesco.jpg" alt="Imagem Produto">
            </a>
          </div>
          <div class="card-block">
            <h5 class="card-text">Rasqueadeira Prática Vermelha Chalesco</h5>
            <p class="card-text">a partir de: R$ 11,50</p>
          </div>
        </div>  

      </div>

      <div id="produtos-medicamentos-titulo-grid">   <!-- Sub-grid de medicamentos -->
        <h5>Medicamentos</h5>
        <hr>
      </div>
    
      <div id="produtos-medicamentos-grid">      

        <div class="card">
          <div>
            <a href="<?=base_url()?>/index.php/produto/visualizar/15">
              <img class="card-img-top" src="<?=base_url()?>/assets/imagens/produtos/cat-nip-120-ml-petmais.jpg" alt="Imagem Produto">
            </a>
          </div>
          <div class="card-block">
            <h5 class="card-text">Cat Nip 120 ml Petmais</h5>
            <p class="card-text">a partir de: R$ 20,50</p>
          </div>
        </div>

        <div class="card">
          <div>
            <a href="<?=base_url()?>/index.php/produto/visualizar/19">
              <img class="card-img-top" src="<?=base_url()?>/assets/imagens/produtos/xixi-aqui-pet-clean-30ml.jpg" alt="Imagem Produto">
            </a>
          </div>
          <div class="card-block">
            <h5 class="card-text">Xixi Aqui Pet Clean - 30ml</h5>
            <p class="card-text">a partir de: R$ 7,30</p>
          </div>
        </div>

        <div class="card">
          <div>
            <a href="<?=base_url()?>/index.php/produto/visualizar/8">
              <img class="card-img-top" src="<?=base_url()?>/assets/imagens/produtos/neodexa-spray-74g-coveli.jpg" alt="Imagem Produto">
            </a>
          </div>
          <div class="card-block">
            <h5 class="card-text">Neodexa Spray 74 g Coveli</h5>
            <p class="card-text">a partir de: R$ 55,90</p>
          </div>
        </div>

        <div class="card">
          <div>
            <a href="<?=base_url()?>/index.php/produto/visualizar/20">
              <img class="card-img-top" src="<?=base_url()?>/assets/imagens/produtos/butox-20-ml-pulverização-intervet.jpg" alt="Imagem Produto">
            </a>
          </div>
          <div class="card-block">
            <h5 class="card-text">Butox 20 ml Pulverização Intervet</h5>
            <p class="card-text">a partir de: R$ 5,90</p>
          </div>
        </div>

        <div class="card">
          <div>
            <a href="<?=base_url()?>/index.php/produto/visualizar/7">
              <img class="card-img-top" src="<?=base_url()?>/assets/imagens/produtos/shampoo-cortishamp-125ml-agener.jpg" alt="Imagem Produto">
            </a>
          </div>
          <div class="card-block">
            <h5 class="card-text">Shampoo Cortishamp 125ml Agener</h5>
            <p class="card-text">a partir de: R$ 68,50</p>
          </div>
        </div>

        <div class="card">
          <div>
            <a href="<?=base_url()?>/index.php/produto/visualizar/10">
              <img class="card-img-top" src="<?=base_url()?>/assets/imagens/produtos/gerioox-labyes.jpg" alt="Imagem Produto">
            </a>
          </div>
          <div class="card-block">
            <h5 class="card-text">Gerioox Labyes</h5>
            <p class="card-text">a partir de: R$ 174,90</p>
          </div>
        </div>

      </div>

    </main>
    
    <footer id="page-footer-grid" class="d-inline-flex">
      <!--<img src="../../../assets/imagens/logoVermelho3.png" width="2.5%">-->
      <div class="mr-auto p-2">
        <div></div>
      </div>
      <div class="mx-auto p-2">
        <div><img id="logo-reduzida" src="<?=base_url()?>/assets/imagens/logo-pequena-borda.png"> Pet Stop</div>
      </div>
      <div class="ml-auto p-2">
        <div>
          <a href="" id="facebook_connection">
            <i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i>
            <i class="fa fa-twitter fa-2x" aria-hidden="true"></i>
          </a>
        </div>
      </div>
    </footer>

  </div>  
</body>
</html>
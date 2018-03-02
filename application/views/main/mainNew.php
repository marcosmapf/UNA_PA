<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	<link rel="stylesheet" href="../../../assets/css/mainNew.css">
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> <!--Jquery Import-->
  <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script> <!--Bootstrap 4 Import-->
  <script src="../../../assets/node_modules/angular/angular.js"></script> <!--AngularJS Import-->
  <script src="../../../assets/node_modules/angular-animate/angular-animate.js"></script> <!--Angular Material Dependency (Animations) Import-->
  <script src="../../../assets/node_modules/angular-aria/angular-aria.js"></script> <!--Angular Material Dependency (Accessibility) Import-->
  <script src="../../../assets/node_modules/angular-messages/angular-messages.js"></script> <!--Angular Material Dependency (Angular Messages) Import--> 
  <script src="../../../assets/node_modules/angular-material/angular-material.js"></script> <!--Angular Material Import-->
  <script type="text/javascript" src="https://use.fontawesome.com/574c45c449.js"></script> <!--Font Awesome Import-->
	<script type="text/javascript" src="../../../assets/js/mainNew.js"></script>
	<title>Pet Stop</title>	
</head>
<body>
  <div class="wrapper"> <!--wrapper da pagina para determinar a grid-->
      
    <div class="container" id="produtos-grid">  <!--Container para os produtos da loja -->


      <div id="produtos-destaque-titulo-grid">
        <h5 class="text-center">Mais Vendidos</h5>
        <hr>
      </div>

      <div id="produtos-destaque-grid" class="row">

        <div class="card bordered">
          <div>
            <a href="">
              <img class="card-img-top" src="../../../assets/imagens/produtos/cama-suiça-bege-bichinho-chic.jpg" alt="Imagem Produto">
            </a>
          </div>
          <div class="card-block">
            <h5 class="card-text">Cama Suiça Bege Bichinho Chic</h5>
            <p class="card-text">a partir de: R$ 51,90</p>
          </div>
        </div>

        <div class="card bordered">
          <div>
            <a href="">
              <img class="card-img-top" src="../../../assets/imagens/produtos/racao-whiskas-gatos-castrados-carne.jpg" alt="Imagem Produto">
            </a>
          </div>
          <div class="card-block">
            <h5 class="card-text">Ração Whiskas Gatos Castrados Carne</h5>
            <p class="card-text">a partir de: R$ 11,99</p>
          </div>
        </div>

        <div class="card bordered">
          <div>
            <a href="">
              <img class="card-img-top" src="../../../assets/imagens/produtos/brinquedo-cenoura-nylon-buddy-toys.jpg" alt="Imagem Produto">
            </a>
          </div>
          <div class="card-block">
            <h5 class="card-text">Brinquedo Cenoura Nylon Buddy Toys</h5>
            <p class="card-text">a partir de: R$ 37,90</p>
          </div>
        </div>

      </div>  
      


      <div id="produtos-caes-titulo-grid">
          <h5>Produtos Para Cães</h5>
          <hr>
      </div>

      <div id="produtos-caes-grid" class="row">
        
        <div class="card">
          <div>
            <a href="">
              <img class="card-img-top" src="../../../assets/imagens/produtos/bebedouro-prático-automático-cães-e-gatos-azul-alvorada.jpg" alt="Imagem Produto">
            </a>
          </div>
          <div class="card-block">
            <h5 class="card-text">Bebedouro Prático Automático Cães e Gatos Azul Alvorada</h5>
            <p class="card-text">a partir de: R$ 21,99</p>
          </div>
        </div>


        <div class="card">
          <div>
            <a href="">
              <img class="card-img-top" src="../../../assets/imagens/produtos/brinquedo-cenoura-nylon-buddy-toys.jpg" alt="Imagem Produto">
            </a>
          </div>
          <div class="card-block">
            <h5 class="card-text">Brinquedo Cenoura Nylon Buddy Toys</h5>
            <p class="card-text">a partir de: R$ 37,90</p>
          </div>
        </div>
      </div>

      
    </div> 
  </div>  
</body>
</html>
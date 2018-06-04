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


	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous"> <!--Bootstrap 4 Stylesheet Import-->
	<link rel="stylesheet" href="<?=base_url()?>assets/css/contato.css"> <!--Local Stylesheet Import-->

	<div class="container">	
		<main class="cadastro-pane">
			<form name="contatoForm" method="post" ng-controller="contatoController">	


				<figure class="brand form-group">
					<a href="<?=base_url();?>index.php/main/index">
						<img src="<?=base_url()?>assets/imagens/logoVermelho2.png" alt="Pet Stop" width="20%">
					</a>
				</figure>


				<div class="row">
					<div class="form-group col-md-12">
						<p>Tem alguma dúvida ou sugestão? Quer fazer uma parceria conosco? Preencha os campos e envie sua mensagem abaixo:</p>
					</div>
				</div>	


				<div class="row">
					<div class="form-group col-md-12">
						<input type="text" name="nomeCompleto" class="form-control" placeholder="Nome Completo*" ng-model="nomeCompleto" required>
					</div>
				</div>		


				<div class="row">

					<div class="form-group col-md-8">
						<input type="email" name="enderecoEmail" class="form-control" placeholder="E-mail*" ng-model="enderecoEmail" ng-pattern="padraoEmail" required>
						<!--<span ng-show="cadastroForm.userAddress.$error.email">Insira um e-mail válido</span>-->
					</div>

					<div class="form-group col-md-4">
						<input type="text" name="telefone" class="form-control" placeholder="Telefone" ng-model="telefone" onKeyPress="if(this.value.length==11) return false;" ng-pattern="padraoTelefone" ui-mask="(99)99999999?9" ui-mask-placeholder ui-mask-placeholder-char="space"> <!--{{telefone|phoneNumber}}-->
					</div>
				</div>


				<div class="row">
					<div class="form-group col-md-12">
						<textarea class="form-control" rows="8" id="comment" placeholder="Insira sua mensagem" ng-model="mensagem"></textarea>
					</div>
				</div>

					<div class="form-group pull-center">
						<button class="btn btn-danger">Enviar</button>
					</div>


			</form>
		</main>
	</div>
	<footer id="page-footer-grid" class="d-inline-flex" style="width:  100%; bottom: 0; position: fixed;">
      <!--<img src="../../../assets/imagens/logoVermelho3.png" width="2.5%">-->
      <div class="mr-auto p-2">
      <a href="https://seal.beyondsecurity.com/vulnerability-scanner-verification/petshopecommerce.herokuapp.com">
        <img src="https://seal.beyondsecurity.com/verification-images/petshopecommerce.herokuapp.com/vulnerability-scanner-2.gif" alt="Website Security Test" border="0" />
      </a>
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

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> <!--Jquery Import-->
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script> <!--Bootstrap 4 Import-->
<script src="<?=base_url()?>assets/node_modules/angular/angular.js"></script> <!--AngularJS Import-->
<script src="<?=base_url()?>assets/node_modules/angular-animate/angular-animate.js"></script> <!--Angular Material Dependency (Animations) Import-->
<script src="<?=base_url()?>assets/node_modules/angular-aria/angular-aria.js"></script> <!--Angular Material Dependency (Accessibility) Import-->
<script src="<?=base_url()?>assets/node_modules/angular-messages/angular-messages.js"></script> <!--Angular Material Dependency (Angular Messages) Import--> 
<script src="<?=base_url()?>assets/node_modules/angular-material/angular-material.js"></script> <!--Angular Material Import-->
<script src="<?=base_url()?>assets/node_modules/angular-ui-mask/dist/mask.js"></script>
<script type="text/javascript" src="https://use.fontawesome.com/574c45c449.js"></script> <!--Font Awesome Import-->
<script type="text/javascript" src="<?=base_url()?>assets/js/contato.js"></script> <!--Local Javascript Import-->

</html>
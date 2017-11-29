<!DOCTYPE html>
<html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Carrinho de Produtos</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous"> <!--Bootstrap 4 Stylesheet Import-->
	<link rel="stylesheet" href="<?=base_url();?>/assets/css/carrinho.css"> <!--Local Stylesheet Import-->
</head>
<body>
	<div class="wrapper">

		<header>
			<nav class="navbar navbar-toggleable-md navbar-inverse fixed-top">
				<!--Menu Colapsado-->
				<button class="navbar-toggler navbar-toggler-right hidden-lg-up" type="button" data-toggle="collapse" data-target="#navbarMenu" aria-controls="navbarMenu" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<!--Logo"-->
				<a class="navbar-brand" href="#"><img src="<?=base_url();?>/assets/imagens/logo-borda.png"> Pet Stop</a>
				<!--Menu Central-->
				<div class="collapse navbar-collapse" id="navbarMenu">        
					<ul class="navbar-nav ml-auto">
						<li class="nav-item nav-menu active">
							<a class="nav-link" href="<?=base_url();?>index.php/main/index">Home<span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item nav-menu">
							<a class="nav-link" href="<?=base_url();?>index.php/main/contato">Contato<span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item nav-menu">
							<a class="nav-link" href="#">Blog<span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item nav-menu">
							<a class="nav-link" href="<?=base_url();?>index.php/main/about">Sobre Nós<span class="sr-only">(current)</span></a>
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
								<img src="<?=base_url();?>/assets/imagens/shopping-cart.png" alt="Shop-Cart">   
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

		<div id="produtos-grid" class="container">


			<section id="produto-relacionado-grid"><!--Produtos Sugeridos-->
				<p>Aproveite e compre junto</p>
				<div class="row d-flex">
					<!--Modelo de produtos sugeridos-->
					<div class="produto produto-sugerido card">
						<figure>
							<a href="#"><img src="" alt="Imagem produto"><a>
						</figure>
						<figcaption>Produto Sugerido 1</figcaption>
						<figcaption>R$ {{precoProduto}}</figcaption>
					</div>
					<div class="produto produto-sugerido card">
						<figure>
							<a href="#"><img src="" alt="Imagem produto"><a>
						</figure>
						<figcaption>Produto Sugerido 1</figcaption>
						<figcaption>R$ {{precoProduto}}</figcaption>
					</div>
					<div class="produto produto-sugerido card">
						<figure>
							<a href="#"><img src="" alt="Imagem produto"><a>
						</figure>
						<figcaption>Produto Sugerido 1</figcaption>
						<figcaption>R$ {{precoProduto}}</figcaption>
					</div>
					<div class="produto produto-sugerido card">
						<figure>
							<a href="#"><img src="" alt="Imagem produto"><a>
						</figure>
						<figcaption>Produto Sugerido 1</figcaption>
						<figcaption>R$ {{precoProduto}}</figcaption>
					</div>
				</div>
			</section>


			<section id="produto-adicionado-grid"><!--Produtos adicionados ao carrinho-->
				<p>Sacola de produtos<p>
				<!--Modelo de produto adicionado-->
				<?php
				foreach($produtos as $produto){
				?>
					<div class="produto card">
						<div class="row text-center d-flex">				
							<div class="col-xl-2 col-lg-2 col-md-4 col-sm-12 col-xs-12 col-12">
								<div>
									<h5>Produto</h5>
								</div>
								<figure>
									<img src="<?=base_url();?>/assets/imagens/produtos/<?=$produto->imagem;?>" alt="Imagem Produto" width="100%">
									<!--<img src="<?=base_url();?>/assets/imagens/produtos/racao-whiskas-gatos-castrados-carne.jpg" alt="Imagem Produto" width="100%">-->
								</figure>
							</div>
							<div class="col-xl-4 col-lg-4 col-md-8 col-sm-6 col-xs-12 col-12">
								<div class="d-flex produto-descricao">
									<div class="flex-column">
										<h5><?=$produto->nome;?></h5>
									</div>
								</div>
							</div>
							<div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-xs-12 col-12">
								<div>
									<h5>Preço</h5>
								</div>
								<div class="v-center d-flex">
									<p><?=$produto->preco;?></p>
								</div>
							</div>
							<div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-xs-12 col-12">
								<div>
									<h5>Quantidade</h5>
								</div>
								<div class="v-center d-flex">
									<input type="number" value="1" min="1" max="10">
								</div>
							</div>
							<div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-xs-12 col-12">
								<div>
									<h5>Preço Total</h5>
								</div>
								<div class="v-center d-flex">
									<p>{{precoTotal}}</p>
								</div>
							</div>
						</div>
					</div>
				<?php
				}
				?>
			</section>


		</div>


		<form id="entrega-grid" class="container"><!--CEP e identificacao de endereco-->
			<div class="row d-flex">
				<div class="mr-4">
					<h2>Calcular frete para</h2> 
				</div>
				<div class="mr-auto">
					<input type="text" id="enderecoCep" class="form-control" placeholder="CEP" ng-model="enderecoCep" onKeyPress="if(this.value.length==8) return false;" ng-pattern="padraoCEP" ui-mask="99999-999" ui-mask-placeholder ui-mask-placeholder-char="_" required>
				</div>
				<div id="precoFrete">
					<h3>Frete: <span style="color: orangered">R$ {{precoFrete}</h3>
				</div>
			</div>
		</form>



		<section id="pagamento-grid" class="container"><!--Formas de pagamento, preço, etc-->
			<div class="row d-flex">
				<div>
					<h2>Subtotal: <span style="color: orangered">R$ <?=$valorTotal->preco;?> à vista</h2>
					<p>ou em até 5x de R$ <?=($valorTotal->preco/5);?> sem juros </p>
					<button class="btn btn-danger">Continuar</button><br><br>
				</div>
			</div>
		</section>

		<footer id="page-footer-grid" class="d-inline-flex">
		<!--<img src="../../../assets/imagens/logoVermelho3.png" width="2.5%">-->
		<div class="mr-auto p-2">
			<div></div>
		</div>
		<div class="mx-auto p-2">
		<div><img id="logo-reduzida" src="../../../assets/imagens/logo-pequena-borda.png"> Pet Stop</div>
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
<script src="../../../assets/node_modules/angular/angular.js"></script> <!--AngularJS Import-->
<script type="text/javascript" src="https://use.fontawesome.com/574c45c449.js"></script> <!--Font Awesome Import-->
<script type="text/javascript" src="../../../assets/js/carrinho.js"></script> <!--Local Javascript Import-->
</html>
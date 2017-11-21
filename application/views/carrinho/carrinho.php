<!DOCTYPE html>
<html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Carrinho de Produtos</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous"> <!--Bootstrap 4 Stylesheet Import-->
	<link rel="stylesheet" href="../../../assets/css/carrinho.css"> <!--Local Stylesheet Import-->
</head>
<body>
	<div class="wrapper">


		<header id="page-header-grid">
			<div class="container">
				<div class="d-flex">
					<div>
						Logo
					</div>
					<div>
						Menus
					</div>
					<div>
						Botões Laterais
					</div>
				</div>
			</div>
		</header>


		<div id="produtos-grid" class="container">


			<section id="produto-relacionado-grid"><!--Produtos Sugeridos-->
				<p>Aproveite e compre junto</p>
				<div class="row d-flex">
					<!--Modelo de produtos sugeridos-->
					<div class="produto produto-sugerido card">
						<p>Produto Sugerido 1</p>
						<figure></figure>
						<figcaption></figcaption>
					</div>
					<div class="produto produto-sugerido card">
						<p>Produto Sugerido 2</p>
						<figure></figure>
						<figcaption></figcaption>
					</div>
					<div class="produto produto-sugerido card">
						<p>Produto Sugerido 3</p>
						<figure></figure>
						<figcaption></figcaption>
					</div>
					<div class="produto produto-sugerido card">
						<p>Produto Sugerido 4</p>
						<figure></figure>
						<figcaption></figcaption>
					</div>
				</div>
			</section>


			<section id="produto-adicionado-grid"><!--Produtos adicionados ao carrinho-->
				<p>Sacola de produtos<p>
				<!--Modelo de produto adicionado-->
				<div class="produto card">
					<p>Produto Adicionado 1</p>
					<figure></figure>
					<figcaption></figcaption>
				</div>
				<div class="produto card">
					<p>Produto Adicionado 2</p>
					<figure></figure>
					<figcaption></figcaption>
				</div>
				<div class="produto card">
					<p>Produto Adicionado 3</p>
					<figure></figure>
					<figcaption></figcaption>
				</div>
			</section>


		</div>


		<form id="entrega-grid" class="container"><!--Formas de pagamento, preço, etc-->
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
					<h2>Subtotal: <span style="color: orangered">R$ {{precoTotal}} à vista</h2>
					<p>ou em até 10x de R$ {{precoTotal/10}} sem juros </p>
					<button class="btn btn-danger">Continuar</button><br><br>
				</div>
			</div>
		</section>

		<footer id="page-footer-grid" data-size="5">
			<div class="container">
				<div class="d-flex">
					<div class="ml-0 mr-auto"></div>
					<div class="mx-auto">
						Logo-Pequena
					</div>
					<div class="ml-auto">
						Redes-Sociais
					</div>
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
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Teste</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous"> <!--Bootstrap 4 Stylesheet Import-->
	<link rel="stylesheet" href="../../../assets/css/login.css"> <!--Local Stylesheet Import-->
</head>
<body ng-app="appModule" ng-cloak>
	<div class="container">
		<main class="login-pane col-md-12 col-sm-12 col-xs-12">
			<form name="loginForm" ng-submit="teste()" method="post" ng-controller="loginController">
				<figure class="brand form-group col-md-12">
					<img src="../imagens/logoVermelho2.png" width="25%">
				</figure>
				<div>
					<div class="row">
						<div class="form-group col-md-12">
							<input type="email" name="enderecoEmail" class="form-control" placeholder="E-mail" ng-model="enderecoEmail" ng-pattern="padraoEmail" required> 
							<!--<span ng-show="loginForm.userAddress.$error.email">Insira um e-mail válido</span>-->
						</div>							
					</div>
					<div class="row">
						<div class="form-group col-md-12">
							<input type="password" name="senhaUsuario" class="form-control" placeholder="Senha" ng-model="senhaUsuario" onKeyPress="if(this.value.length==30) return false;" required>
						</div>
					</div>					
					<div class="row">
						<div class="form-group col-md-8 centralize">
							<input id="submitButton" type="submit" class="btn btn-danger">
						</div>
						<div class="form-group col-md-4 centralize">
							<label>
								<input type="checkbox" value="remember-me"> Lembrar Senha
							</label>
						</div>
					</div>
					<div class="row">
						<div class="password-alert col-md-6 align-center">
							<a href="#">Esqueceu a senha?</a>
						</div>
					</div>
				</div>
				<hr>
				<div class="social-block-title">
					<p>Login com Rede Social</p>
				</div>
				<div class="social-block">
					<a href="" id="facebook_connection" ng-click="">
						<i class="fa fa-facebook-square fa-3x"></i>
					</a>
					<a href="" id="twitter-connection" ng-click="">
						<i class="fa fa-twitter-square fa-3x"></i>
					</a>
					<a href="" id="google-connection" ng-click="">
						<i class="fa fa-google-plus-square fa-3x g-square"></i>
					</a>
				</div>
			</form>			
		</main>
	</div>
</body>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> <!--Jquery Import-->
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script> <!--Bootstrap 4 Import-->
<script src="../../../assets/node_modules/angular/angular.js"></script> <!--AngularJS Import-->
<script src="../../../assets/node_modules/angular-animate/angular-animate.js"></script> <!--Angular Material Dependency (Animations) Import-->
<script src="../../../assets/node_modules/angular-aria/angular-aria.js"></script> <!--Angular Material Dependency (Accessibility) Import-->
<script src="../../../assets/node_modules/angular-messages/angular-messages.js"></script> <!--Angular Material Dependency (Angular Messages) Import--> 
<script src="../../../assets/node_modules/angular-material/angular-material.js"></script> <!--Angular Material Import-->
<script type="text/javascript" src="https://use.fontawesome.com/574c45c449.js"></script> <!--Font Awesome Import-->
<script type="text/javascript" src="../../../assets/js/login.js"></script> <!--Local Javascript Import-->
</html>


<!-- 
Tutoriais Angular Messages 	
https://www.yearofmoo.com/2014/05/how-to-use-ngmessages-in-angularjs.html 
https://docs.angularjs.org/api/ngMessages/directive/ngMessages
-->


<!--HOW TO SOLVE CROSS-ORIGIN REQUESTS Quando utilizando Ng-include
https://stackoverflow.com/questions/43936500/cross-origin-requests-are-only-supported-for-protocol-schemes-http-data-chrom-->
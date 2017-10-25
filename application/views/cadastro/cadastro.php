<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Teste</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous"> <!--Bootstrap 4 Stylesheet Import-->
	<link rel="stylesheet" href="cadastro.css"> <!--Local Stylesheet Import-->
</head>
<body ng-app="appModule" ng-cloak>	
	<div id="background-image"></div>
	<form name="cadastroForm" class="login-pane" ng-submit="teste()" method="post" ng-controller="cadastroController">
		<figure class="brand form-group"></figure>
		<div>
			<div class="clearfix">
				<div class="form-group">
					<input type="text" name="nomeCompleto" class="form-control" placeholder="Nome Completo" ng-model="nomeCompleto" required>
				</div>
				<div class="form-group">
					<input type="email" name="enderecoEmail" class="form-control" placeholder="E-mail" ng-model="enderecoEmail" required>
					<!--<span ng-show="cadastroForm.userAddress.$error.email">Insira um e-mail válido</span>-->
				</div>
				<div class="form-group">
					<input type="password" name="senhaUsuario" class="form-control" ngMinlength="7" placeholder="Senha" ng-model="senhUsuario" onKeyPress="if(this.value.length==30) return false;" required>
				</div>
				<div class="form-group">
					<input type="number" name="telefone" class="form-control" placeholder="Telefone" ng-model="telefone" onKeyPress="if(this.value.length==11) return false;" required> <!--{{telefone|phoneNumber}}-->
				</div>
				<div class="form-group pull-left">
					<input type="text" name="enderecoCep" class="form-control" placeholder="CEP" ng-model="enderecoCep" onKeyPress="if(this.value.length==8) return false;" required>
				</div>
				<div class="form-group pull-right">
					<input type="text" name="enderecoEstado" class="form-control" placeholder="Estado" ng-model="enderecoEstado" maxLength="2" ng-pattern="'^[a-zA-Z]{2}$'" required>
				</div>
				<div class="form-group">
					<input type="text" name="enderecoCidade" class="form-control" placeholder="Cidade" ng-model="enderecoCidade" required>
				</div>
				<div class="form-group">
					<input type="text" name="enderecoRua" class="form-control" placeholder="Rua" ng-model="enderecoRua" required>
				</div>
				<div class="form-group">
					<input type="number" name="enderecoNumero" class="form-control" placeholder="Número" ng-model="enderecoNumero" required>
				</div>
				<div class="form-group">
					<input type="text" name="enderecoComplemento" class="form-control" placeholder="Complemento (opcional)" ng-model="enderecoComplemento">
				</div>
				<div class="form-group pull-center">
					<input type="submit" class="btn btn-danger">
				</div>
			</div>
		</div>
	<form>
</body>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> <!--Jquery Import-->
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script> <!--Bootstrap 4 Import-->
<script src="node_modules/angular/angular.js"></script> <!--AngularJS Import-->
<script src="node_modules/angular-animate/angular-animate.js"></script> <!--Angular Material Dependency (Animations) Import-->
<script src="node_modules/angular-aria/angular-aria.js"></script> <!--Angular Material Dependency (Accessibility) Import-->
<script src="node_modules/angular-messages/angular-messages.js"></script> <!--Angular Material Dependency (Angular Messages) Import--> 
<script src="node_modules/angular-material/angular-material.js"></script> <!--Angular Material Import-->
<script type="text/javascript" src="https://use.fontawesome.com/574c45c449.js"></script> <!--Font Awesome Import-->
<script type="text/javascript" src="cadastro.js"></script> <!--Local Javascript Import-->
</html>


<!--Angular UI Mask para Telefone!!
https://github.com/angular-ui/ui-mask-->

<!-- 
Tutoriais Angular Messages 	
https://www.yearofmoo.com/2014/05/how-to-use-ngmessages-in-angularjs.html 
https://docs.angularjs.org/api/ngMessages/directive/ngMessages
-->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Teste</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous"> <!--Bootstrap 4 Stylesheet Import-->
	<link rel="stylesheet" href="../../../assets/css/cadastro.css"> <!--Local Stylesheet Import-->
	<script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
</head>
<body ng-app="appModule" ng-cloak>
	<div class="container">	
		<main class="cadastro-pane col-md-12 col-sm-12 col-xs-12">
			<form name="cadastroForm" ng-submit="teste()" method="post" ng-controller="cadastroController">				
				<figure class="brand form-group">
					<a href="<?=base_url?>/application/views/login/login.php">
						<img src="../../../assets/imagens/logoVermelho2.png" width="25%">
					</a>
				</figure>
				<div class="row">
					<div class="form-group col-md-8">
						<input type="text" name="nomeCompleto" class="form-control" placeholder="Nome Completo" ng-model="nomeCompleto" required>
					</div>
					<div class="form-group col-md-4">
						<select name="nomeCompleto" class="form-control" ng-model="sexo" required>
							<option value="" disabled selected>Sexo</option>
							<option value="M">Masculino</option>
							<option value="F">Feminino</option>
						</select>
					</div>
				</div>		
				<div class="row">
					<div class="form-group col-md-8">
						<input type="email" name="enderecoEmail" class="form-control" placeholder="E-mail" ng-model="enderecoEmail" ng-pattern="padraoEmail" required>
						<!--<span ng-show="cadastroForm.userAddress.$error.email">Insira um e-mail válido</span>-->
					</div>
					<div class="form-group col-md-4">
						<input type="text" name="telefone" class="form-control" placeholder="Telefone" ng-model="telefone" onKeyPress="if(this.value.length==11) return false;" ng-pattern="padraoTelefone" ui-mask="(99)99999999?9" ui-mask-placeholder ui-mask-placeholder-char="space" required> <!--{{telefone|phoneNumber}}-->
					</div>
				</div>		
				<div class="row">
					<div class="form-group col-md-8">
						<input type="password" name="senhaUsuario" class="form-control" ngMinlength="7" placeholder="Senha" ng-model="senhaUsuario" onKeyPress="if(this.value.length==30) return false;" required>
					</div>
				</div>
				<div class="row">
					<div class="form-group col-md-4">
						<input type="text" id="enderecoCep" class="form-control" placeholder="CEP" ng-model="enderecoCep" onKeyPress="if(this.value.length==8) return false;" ng-pattern="padraoCEP" ui-mask="99999-999" ui-mask-placeholder ui-mask-placeholder-char="_" required>
					</div>
					<div class="form-group col-md-4">
						<input type="text" name="enderecoEstado" id="uf" class="form-control" placeholder="Estado" ng-model="enderecoEstado" required>
					</div>
					<div class="form-group col-md-4">
						<input type="text" name="enderecoCidade" id="cidade" class="form-control" placeholder="Cidade" ng-model="enderecoCidade" required>
					</div>
				</div>		
				<div class="row">					
					<div class="form-group col-md-8">
						<input type="text" name="enderecoRua" id="enderecoRua" class="form-control" placeholder="Rua" ng-model="enderecoRua" required>
					</div>
					<div class="form-group col-md-4">
						<input type="number" name="enderecoNumero" class="form-control" placeholder="Número" ng-model="enderecoNumero" required>
					</div>					
				</div>	
				<div class="row">
					<div class="form-group col-md-8">
						<input type="text" name="enderecoComplemento" class="form-control" placeholder="Complemento (opcional)" ng-model="enderecoComplemento">
					</div>
				</div>
				<div class="form-group pull-center">
					<input type="submit" class="btn btn-danger">
				</div>
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
<script src="../../../assets/node_modules/angular-ui-mask/dist/mask.js"></script>
<script type="text/javascript" src="https://use.fontawesome.com/574c45c449.js"></script> <!--Font Awesome Import-->
<script type="text/javascript" src="../../../assets/js/cadastro.js"></script> <!--Local Javascript Import-->
</html>

<!-- 
Tutoriais Angular Messages 	
https://www.yearofmoo.com/2014/05/how-to-use-ngmessages-in-angularjs.html 
https://docs.angularjs.org/api/ngMessages/directive/ngMessages
-->
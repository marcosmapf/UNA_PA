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
	<div class="container">	
		<main class="login-pane col-md-12 col-sm-12 col-xs-12">
			<form name="cadastroForm" ng-submit="teste()" method="post" ng-controller="cadastroController">
				
				<figure class="brand form-group"></figure>

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
						<input type="password" name="senhaUsuario" class="form-control" ngMinlength="7" placeholder="Senha" ng-model="senhUsuario" onKeyPress="if(this.value.length==30) return false;" required>
					</div>
				</div>

				<div class="row">
					<div class="form-group col-md-4">
						<input type="text" name="enderecoCep" class="form-control" placeholder="CEP" ng-model="enderecoCep" onKeyPress="if(this.value.length==8) return false;" required>
					</div>
					<div class="form-group col-md-4">
						<select name="nomeCompleto" class="form-control" ng-model="sexo" required>
							<option value="" disabled selected>Estado</option>
							<option value="AC">Acre</option>
							<option value="AL">Alagoas</option>
							<option value="AP">Amapá</option>
							<option value="AM">Amazonas</option>
							<option value="BA">Bahia</option>
							<option value="CE">Ceará</option>
							<option value="DF">Distrito Federal</option>
							<option value="ES">Espirito Santo</option>
							<option value="GO">Goiás</option>
							<option value="MA">Maranhão</option>
							<option value="MT">Mato Grosso</option>
							<option value="MS">Mato Grosso do Sul</option>
							<option value="MG">Minas Gerais</option>
							<option value="PA">Pará</option>
							<option value="PB">Paraíba</option>
							<option value="PR">Paraná</option>
							<option value="PE">Pernambuco</option>
							<option value="PI">Piauí</option>
							<option value="RJ">Rio de Janeiro</option>
							<option value="RN">Rio Grande do Norte</option>
							<option value="RS">Rio Grande do Sul</option>
							<option value="RO">Rondônia</option>
							<option value="RR">Roraima</option>
							<option value="SC">Santa Catarina</option>
							<option value="SP">São Paulo</option>
							<option value="SE">Sergipe</option>
							<option value="TO">Tocantins</option>
						</select>
					</div>
					<div class="form-group col-md-4">
						<input type="text" name="enderecoCidade" class="form-control" placeholder="Cidade" ng-model="enderecoCidade" required>
					</div>
				</div>		

				<div class="row">					
					<div class="form-group col-md-8">
						<input type="text" name="enderecoRua" class="form-control" placeholder="Rua" ng-model="enderecoRua" required>
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
<script src="node_modules/angular/angular.js"></script> <!--AngularJS Import-->
<script src="node_modules/angular-animate/angular-animate.js"></script> <!--Angular Material Dependency (Animations) Import-->
<script src="node_modules/angular-aria/angular-aria.js"></script> <!--Angular Material Dependency (Accessibility) Import-->
<script src="node_modules/angular-messages/angular-messages.js"></script> <!--Angular Material Dependency (Angular Messages) Import--> 
<script src="node_modules/angular-material/angular-material.js"></script> <!--Angular Material Import-->
<script src="node_modules/angular-ui-mask/dist/mask.js"></script>
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
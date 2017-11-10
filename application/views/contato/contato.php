<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Teste</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous"> <!--Bootstrap 4 Stylesheet Import-->
	<link rel="stylesheet" href="../../../assets/css/contato.css"> <!--Local Stylesheet Import-->
</head>
<body ng-app="appModule" ng-cloak>
	<div class="container">	
		<main class="cadastro-pane col-md-12 col-sm-12 col-xs-12">
			<form name="contatoForm" ng-submit="teste()" method="post" ng-controller="contatoController">	


				<figure class="brand form-group">
					<img src="../../../assets/imagens/logoVermelho2.png" alt="Pet Stop" width="20%">
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
<script type="text/javascript" src="../../../assets/js/contato.js"></script> <!--Local Javascript Import-->
</html>

<!-- 
Tutoriais Angular Messages 	
https://www.yearofmoo.com/2014/05/how-to-use-ngmessages-in-angularjs.html 
https://docs.angularjs.org/api/ngMessages/directive/ngMessages
-->
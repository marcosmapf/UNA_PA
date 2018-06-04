	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Login</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous"> <!--Bootstrap 4 Stylesheet Import-->
		<link rel="stylesheet" href="<?=base_url()?>assets/css/login.css"> <!--Local Stylesheet Import-->
	</head>
	<body ng-app="appModule" ng-cloak>
		<div class="container">
			<main class="login-pane col-md-12 col-sm-12 col-xs-12">
				<!--<form name="loginForm" ng-submit="teste()" method="post" ng-controller="loginController">-->
				<form name="loginForm" action="<?=base_url()?>entrar" method="post" >
					<figure class="brand form-group col-md-12">
						<a href="<?=base_url();?>index.php/main/index">
							<img src="<?=base_url()?>assets/imagens/logoVermelho2.png" width="25%">
						</a>
					</figure>
					<div>
						<?php if($this->session->flashdata('msg') !== NULL){?>
							<div class="alert alert-danger" role="alert">
							  <?= $this->session->flashdata('msg')?>
							</div>
						<?php  } ?>
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
								<input id="submitButton" type="submit" class="btn btn-danger" value="Entrar">
							</div>
							<div class="form-group col-md-4 centralize">
								<label>
									<input type="checkbox" value="remember-me"> Lembrar Senha
								</label>
							</div>
						</div>
						<div class="row">
							<div class="password-alert col-md-6 align-center">
								<a href="<?=base_url();?>index.php/user_authentication/cadastro">Cadastro</a>
							</div>
						</div>
					</div>
					<hr>
					<div class="social-block-title">
						<p>Login com Rede Social</p>
					</div>
					<div class="my-account social-block">
						<?php if ( !$this->facebook->logged_in() ): ?>
							<a href="<?php echo $this->facebook->login_url()?>"><i style="text-align: center" class="fa fa-facebook-square fa-3x"></i></a>
							<fb:facepile></fb:facepile>
						<?php else:?>
							<img class="avatar" src="<?php echo facebook_picture('me')?>" />
							<?php $user = $this->facebook->user();?>
							<h2><?php echo $user->name?> ( <a href="<?php echo site_url('facebook_test/logout')?>">Logout</a> )</h2>
							<fb:like></fb:like>
							<?php $result = $this->facebook->call('get', 'me', array('metadata' => 1));?>
							<pre>
								<?php var_dump($result);?>
							</pre>
						<?php endif;?>
					</div>
				</form>			
			</main>
		</div>
	</body>
	<script src="http://connect.facebook.net/en_US/all.js" type="text/javascript"></script>
		<script type="text/javascript">
			FB.init({appId: '<?php echo facebook_app_id()?>', status: true, cookie: true, xfbml: true});
			FB.Event.subscribe('auth.login', function(response) {
				window.location.reload();
			});
		</script>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> <!--Jquery Import-->
		<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script> <!--Bootstrap 4 Import-->
		<script src="<?=base_url()?>assets/node_modules/angular/angular.js"></script> <!--AngularJS Import-->
		<script src="<?=base_url()?>assets/node_modules/angular-animate/angular-animate.js"></script> <!--Angular Material Dependency (Animations) Import-->
		<script src="<?=base_url()?>assets/node_modules/angular-aria/angular-aria.js"></script> <!--Angular Material Dependency (Accessibility) Import-->
		<script src="<?=base_url()?>assets/node_modules/angular-messages/angular-messages.js"></script> <!--Angular Material Dependency (Angular Messages) Import--> 
		<script src="<?=base_url()?>assets/node_modules/angular-material/angular-material.js"></script> <!--Angular Material Import-->
		<script type="text/javascript" src="https://use.fontawesome.com/574c45c449.js"></script> <!--Font Awesome Import-->
		<script type="text/javascript" src="<?=base_url()?>assets/js/login.js"></script> <!--Local Javascript Import-->
	</html>
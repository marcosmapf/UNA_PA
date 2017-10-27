var appModule = angular.module("appModule", ['ngMaterial', 'ngMessages', 'ui.mask']);

appModule.controller('cadastroController', function($scope) {

	$scope.nomeCompleto;
	$scope.sexo;
	$scope.enderecoEmail
	$scope.senhaUsuario;
	$scope.telefone;
	$scope.enderecoCep;
	$scope.enderecoEstado;
	$scope.enderecoCidade;
	$scope.enderecoRua;
	$scope.enderecoNumero;
	$scope.enderecoComplemento;
	$scope.padraoTelefone = new RegExp(/^\([0-9]{2}\)(3[0-9]{7}\s|9[7-9][0-9]{7})$/);
	$scope.padraoEmail = new RegExp(/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/);
	$scope.padraoCEP = new RegExp(/^[0-9]{5}-[0-9]{3}$/);

	$scope.teste = function(){
		window.alert("teste");
	}

	//Declarando Funções/Métodos dentro do escopo --> $scope.nomeDaFuncao = function() {}
});
var appModule = angular.module("appModule", ['ngMaterial', 'ngMessages', 'ngAnimate']);

appModule.controller('loginController', function($scope) {
	//Declarando Variáveis dentro do escopo   -->    $scope.a = 3;
	
	$scope.enderecoEmail;
	$scope.senhaUsuario;
	$scope.padraoEmail = new RegExp(/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/);
});
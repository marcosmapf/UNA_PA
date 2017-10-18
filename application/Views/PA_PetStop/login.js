var appModule = angular.module("appModule", ['ngMaterial', 'ngMessages']);

appModule.controller('loginController', function($scope) {
	//Declarando Variáveis dentro do escopo   -->    $scope.a = 3;
	$scope.emailAddress;
	$scope.password;
	//Declarando Funções/Métodos dentro do escopo --> $scope.nomeDaFuncao = function() {}
});
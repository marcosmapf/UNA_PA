var appModule = angular.module("appModule", ['ngMaterial', 'ngMessages', 'ngAnimate']);

appModule.controller('viewController', function($scope) {
	
	$scope.templates = [{name:'loginForm.html', url:'loginForm.html'},
						{name:'cadastroForm.html', url:'cadastroForm.html'}]
	$scope.template = $scope.templates[0];
});

appModule.controller('loginController', function($scope) {
	//Declarando Variáveis dentro do escopo   -->    $scope.a = 3;
	//$scope.emailAddress;
	//$scope.password;
});
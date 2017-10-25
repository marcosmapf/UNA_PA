var appModule = angular.module("appModule", ['ngMaterial', 'ngMessages']);

appModule.controller('viewController', function($scope) {
	$scope.templates = [{nome: "login.php", url:"login.php"}, {nome: "cadastro.php", url: "cadastro.php"}]
	$scope.currentTemplate = templates[0];
});

appModule.controller('loginController', function($scope) {
	//Declarando Variáveis dentro do escopo   -->    $scope.a = 3;
	$scope.emailAddress;
	$scope.password;
	//Declarando Funções/Métodos dentro do escopo --> $scope.nomeDaFuncao = function() {}
});

appModule.controller('cadastroController', function($scope) {

	$scope.nomeCompleto;
	$scope.enderedoEmail;
	$scope.senhaUsuario;
	$scope.telefone;
	$scope.enderecoCep;
	$scope.enderecoEstado;
	$scope.enderecoCidade;
	$scope.enderecoRua;
	$scope.enderecoNumero;
	$scope.enderecoComplemento;

	$scope.teste = function(){
		window.alert("teste");
	}

	//Declarando Funções/Métodos dentro do escopo --> $scope.nomeDaFuncao = function() {}
});






appModule.filter('phoneNumber', function () {
    return function (number) {
        if (!number) { return ''; }
        number = String(number);
        number = number.replace(/[^0-9]*/g, '');
        var formattedNumber = number;

        var c = (number[0] == '1') ? '1' : '';
        number = number[0] == '1' ? number.slice(1) : number;

        var area = number.substring(0, 3);
        var front = number.substring(3, 6);
        var end = number.substring(6, 10);

        if (front) {
            formattedNumber = (c + "(" + area + ") " + front);
        }
        if (end) {
            formattedNumber += ("-" + end);
        }
        return formattedNumber;
    };
});
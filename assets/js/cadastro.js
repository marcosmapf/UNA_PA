//Modulo angular para verificação de padrão de email e variáveis para banco de dados.
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
    $scope.enderecoBairro;
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

//Jquery para integração com ViaCep
$(document).ready(function() {

    function limpa_formulário_cep() {
        // Limpa valores do formulário de cep.
        $("#enderecoRua").val("");
        $("#bairro").val("");
        $("#cidade").val("");
        $("#uf").val("");
    }
    
    //Quando o campo cep perde o foco.
    $("#enderecoCep").blur(function() {

        //Nova variável "cep" somente com dígitos.
        var cep = $(this).val().replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if(validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                $("#enderecoRua").val("...");
                $("#bairro").val("...");
                $("#cidade").val("...");
                $("#uf").val("...");

                //Consulta o webservice viacep.com.br/
                $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                    if (!("erro" in dados)) {
                        //Atualiza os campos com os valores da consulta.
                        $("#enderecoRua").val(dados.logradouro);
                        $("#bairro").val(dados.bairro);
                        $("#cidade").val(dados.localidade);
                        $("#uf").val(dados.uf);
      
                    } //end if.
                    else {
                        //CEP pesquisado não foi encontrado.
                        limpa_formulário_cep();
                        alert("CEP não encontrado.");
                    }
                });
            } //end if.
            else {
                //cep é inválido.
                limpa_formulário_cep();
                alert("Formato de CEP inválido.");
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulário_cep();
        }
    });
});
var appModule = angular.module("appModule", []);

appModule.controller('produtoController', function($scope) {
  //Declarando Variáveis dentro do escopo   -->    $scope.a = 3;
  
  $scope.nomeProduto = "Produto";
  $scope.descricaoProduto = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
  $scope.imagemProduto = "../../../assets/imagens/acesso_background.jpg"
  $scope.precoProduto = 280;
  /*
  $scope.quantidadeProdutos =  [
         {value: 1, name: 1},
         {value: 2, name: 2},
         {value: 3, name: 3},
         {value: 4, name: 4},
         {value: 5, name: 5},
         {value: 6, name: 6}
    ]
  $scope.quantidadeSelecionada;
  $scope.precoFinal = $scope.precoProduto * $scope.quantidadeSelecionada;
  */
});

 $(document).ready(function () {
  $('#searchButton').click(function () {
    if($('#searchForm').length){
      $('#searchForm').remove();
      $("<div class='mt-md-0 ml-auto'>").insertBefore("#searchButton");
    }
    else 
      $("<form class='form-inline mt-md-0 ml-auto' id='searchForm'><input class='form-control' type='text' placeholder='Produto'></form>").insertBefore("#searchButton");
  });
});



var appModule = angular.module("appModule", []);

appModule.controller('produtoController', function($scope) {
  //Declarando Variáveis dentro do escopo   -->    $scope.a = 3;
  
  $scope.nomeProduto = "Bebedouro Prático Automático Cães e Gatos Azul Alvorada";
  $scope.descricaoProduto = ""
  $scope.imagemProduto = "../../../assets/imagens/produtos/bebedouro-prático-automático-cães-e-gatos-azul-alvorada.webp"
  $scope.precoProduto = 21.99;
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
    }
    else 
      $("<form class='form-inline mt-md-0 ml-auto' id='searchForm'><input class='form-control' type='text' placeholder='Produto'></form>").insertBefore("#searchButton");
  });
});



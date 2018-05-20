	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous"> <!--Bootstrap 4 Stylesheet Import-->
	<link rel="stylesheet" href="<?=base_url();?>/assets/css/carrinho.css"> <!--Local Stylesheet Import-->
	<script>
		function calculaTotal(cod){
			total = parseFloat($("#precoProduto_"+cod).val()) * $("#qtdProduto_"+cod).val();
			$("#precoTotal_"+cod).html("");
			$("#precoTotal_"+cod).html(total);
			$("#totalprd_"+cod).val(total);

			qtdItens = $("#totalCont").val();
			totalCompra = 0;
			for(i=0; i<=qtdItens; i++){
				totalCompra += parseFloat($("#totalprd_"+cod).val());
			}

			parcela = parseFloat(totalCompra)/5;

			$("#subTotal").html("Subtotal: <span style='color: orangered'>R$"+totalCompra.toFixed(2)+" à vista");
			$("#parcelas").html("ou em até 5x de R$"+parcela.toFixed(2)+" sem juros ");
			
		}
	</script>

<body>
	<div class="wrapper">

		

		<div id="produtos-grid" class="container">

			<section id="produto-relacionado-grid">

			</section>

			<section id="produto-adicionado-grid"><!--Produtos adicionados ao carrinho-->
				<p>Sacola de produtos<p>
				<!--Modelo de produto adicionado-->
				<?php if($vazio === 'cheio'){ 
				$cont = 0;
				foreach($produtos as $produto){
				?>
					<div class="produto card">
						<div class="row text-center d-flex">				
							<div class="col-xl-2 col-lg-2 col-md-4 col-sm-12 col-xs-12 col-12">
								<div>
									<h5>Produto</h5>
								</div>
								<figure>
									<img src="<?=base_url();?>/assets/imagens/produtos/<?=$produto->imagem;?>" alt="Imagem Produto" width="100%">
									<!--<img src="<?=base_url();?>/assets/imagens/produtos/racao-whiskas-gatos-castrados-carne.jpg" alt="Imagem Produto" width="100%">-->
								</figure>
							</div>
							<div class="col-xl-4 col-lg-4 col-md-8 col-sm-6 col-xs-12 col-12">
								<div class="d-flex produto-descricao">
									<div class="flex-column">
										<h5><?=$produto->nome;?></h5>
									</div>
								</div>
							</div>
							<div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-xs-12 col-12">
								<div>
									<h5>Preço</h5>
								</div>
								<div class="v-center d-flex">
									<input type="hidden" id="precoProduto_<?=$cont?>" value="<?=$produto->preco;?>">
									<p><?=$produto->preco;?></p>
								</div>
							</div>
							<div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-xs-12 col-12">
								
								<div>
									<h5>Quantidade</h5>
								</div>
								<div class="v-center d-flex">
									<a href="<?=base_url()?>carrinho/retirar/<?=$produto->codigoProduto?>"><i style="color: red" class="fa fa-trash fa-2x" aria-hidden="true"></i></a>
									<input type="number" id="qtdProduto_<?=$cont?>" onchange="calculaTotal(<?=$cont?>)" value="1" min="1" max="10">
								</div>
							</div>
							<div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-xs-12 col-12">
								<div>
									<h5>Preço Total</h5>
								</div>
								<div class="v-center d-flex">
									<input type="hidden" name="totalprd" id="totalprd_<?=$cont?>">
									<p id="precoTotal_<?=$cont?>"><?=$produto->preco;?></p>
								</div>
							</div>
						</div>
					</div>
				<?php
					}
				}else{ ?>
					<div class="produto card">
						<div class="row text-center d-flex">
							<h2>Seu carrinho está vazio</h2>

						</div>
					</div>
					<a href="<?=base_url()?>main/index" class="btn btn-info" role="button">Escolher + produtos</a>
				<?php } ?>
			</section>


		</div>


		<?php if($vazio === 'cheio'){ ?> 
		<form id="entrega-grid" class="container"><!--CEP e identificacao de endereco-->
			<div class="row d-flex">
				<div class="mr-4">
					<h2>Calcular frete para</h2>

				</div>
				<div class="mr-auto row">
					<div class="col-md-10">
						<input type="text" id="enderecoCep" class="form-control" placeholder="CEP" ng-model="enderecoCep" onKeyPress="if(this.value.length==8) return false;" ng-pattern="padraoCEP" ui-mask="99999-999" ui-mask-placeholder ui-mask-placeholder-char="_" required>
					
					</div>
					<div class="col-md-1">
						<button class="btn btn-info" style="float: right" id="calcularFrete">OK</button>
					</div>
				</div>
				
				<div id="precoFrete">
					<h3 >Frete: <span id="frete_valor" style="color: orangered">R$ 0,00</h3>
					<h6 id="frete_dias"></h6>
				</div>
			</div>
		</form>


		
		<section id="pagamento-grid" class="container">
			<!--Formas de pagamento, preço, etc-->
			<a href="<?=base_url()?>main/index" class="btn btn-info" role="button">Escolher + produtos</a>
			<div class="row d-flex">
				<div>
					<input type="hidden" id="totalCont" value="<?=$cont?>">
					<input type="hidden" id="subtotalhidden" value="<?=$valorTotal->preco?>">
					<h2 id="subTotal">Subtotal: <span id="subtotalSpan" style="color: orangered">R$ <?=$valorTotal->preco;?> à vista</h2>
					<p id="parcelas">ou em até 5x de R$ <?=($valorTotal->preco/5);?> sem juros </p>
					<button class="btn btn-danger">Continuar</button><br><br>
				</div>
			</div>
		</section>
		<?php } ?>


	</div>
</body>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> <!--Jquery Import-->
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script> <!--Bootstrap 4 Import-->
<script src="<?=base_url()?>assets/node_modules/angular/angular.js"></script> <!--AngularJS Import-->
<script type="text/javascript" src="https://use.fontawesome.com/574c45c449.js"></script> <!--Font Awesome Import-->
<script type="text/javascript" src="<?=base_url()?>assets/js/carrinho.js"></script> <!--Local Javascript Import-->

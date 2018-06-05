<body>
	<div class="wrapper">

		

		<div id="produtos-grid" class="container">

			

			<section id="produto-adicionado-grid">

				<br>
				<h2>Pedidos:</h2>
				<div class="row" style="margin-top: 4%">

				<?php 
				foreach ($pedidos as $pedido) {
					if(isset($pedido[0])) { ?>
					<div class="col-lg-12">
					<div class="card" style="border-radius: 5px; box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2); padding: 20px; margin-bottom: 2%; border-style: solid; border-width: 1px;">
					  <div class="card-body">
					    <h5 class="card-title">Pedido #<?=$pedido['codigoPedido']?> - Status: <?=$pedido['nome']?></h5>
					    <h6 class="card-subtitle mb-2 text-muted">Produtos</h6>
					    <ul class="list-group list-group-flush">
						<?php $valortotal = 0;
						foreach ($pedido[0]['produtos'] as $itens) { ?>
							<li class="list-group-item">Nome: <?=$itens['nome']?><br>
							Quantidade: <?=$itens['quantidade']?><br>
							
							Preço: <?=$itens['preco_compra']?><br></li>
						<?php $valortotal += floatval($itens['preco_compra']);
						}  ?>
						<br>
						 <h6 class="card-subtitle mb-2 text-muted">Endereço de entrega</h6>
						 <?=$pedido['endereco']?><?=$pedido['numero']?> Bairro: <?=$pedido['bairro']?> CEP: <?=$pedido['cep']?> 
						 <br>
						 <h6 class="card-subtitle mb-2 text-muted">Total do pedido</h6>
						 Valor: R$ <?=$valortotal?>
  						</ul>
					    
					  </div>
					</div>

					</div>

				<?php 
				 } } ?>
				 
				 </div>
				 <br><br>

			</section>
		</div>
	</div>
</body>
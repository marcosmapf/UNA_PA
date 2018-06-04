<body>
	<div class="wrapper">

		

		<div id="produtos-grid" class="container">

			<section id="produto-relacionado-grid">

			</section>

			<section id="produto-adicionado-grid">


				<?php foreach ($pedidos as $pedido) { ?>
					Pedido #<?=$pedido['codigoPedido']?><br>
						
					Produtos: 
					<?php if(isset($pedido[0])){
					foreach ($pedido[0]['produtos'] as $itens) { ?>
						Nome: <?=$itens['nome']?><br>
						Descrição: <?=$itens['descricao']?><br>
						Quantidade: <?=$itens['quantidade']?><br>
						Preço: <?=$itens['preco_compra']?><br>
					<?php } ?>
						
				<?php }
				 } ?>

			</section>
		</div>
	</div>
</body>
<body>
	<div class="wrapper">

		<div id="produtos-grid" class="container">
			<section id="produto-adicionado-grid"><!--Produtos adicionados ao carrinho-->
				<h3>Finalizar pedido</h3>
				<h4>Produtos:</h4>
				<?php foreach($produtos as $produto){ ?>
				
				<b>Nome:</b> <a href="<?=base_url()?>/produto/visualizar/<?=$produto->codigoProduto?>"><?=$produto->nome;?></a> <b>Preço:</b> <?=$produto->preco;?><br>
				<?php  } ?>



				<h4>Endereço de entrega:</h4>
				<?php var_dump($this->session->userdata('logado')['id']) ?>
					<?=$this->session->userdata('endereco')['endereco'] ?><br>
					Número: <?=$this->session->userdata('endereco')['numero'] ?><br>
					Bairro: <?=$this->session->userdata('endereco')['bairro'] ?><br>
					CEP: <?=$this->session->userdata('endereco')['cep'] ?><br>
					Cidade: <?=$this->session->userdata('endereco')['cid_nome'] ?> - Estado: <?=$this->session->userdata('endereco')['est_nome'] ?><br><br>



				<h4>Forma de pagamento:</h4>
			</section>
			<a href="<?=base_url()?>pedido_finalizado/<?=$id_unico?>/<?=$this->session->userdata('endereco')['codigoEnderecoCliente']?>/<?=$this->session->userdata('logado')['id']?>">Teste</a>
		</div>
	</div>
</body>
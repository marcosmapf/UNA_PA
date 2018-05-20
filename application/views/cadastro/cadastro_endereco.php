<div style="margin-top: 10%" class="container">	
		<main class="cadastro-pane col-md-offset-2 col-md-10 col-sm-12 col-xs-12">
			<form name="cadastroForm" method="post" action="<?=base_url()?>cadastro/endereco_salvar">
				<?php if($this->session->flashdata('sucesso') !== NULL) { ?>
				<div class="alert alert-success">
				  <strong> <?=$this->session->flashdata('sucesso');?></strong>
				</div>
				<?php }elseif($this->session->flashdata('erro') !== NULL) { ?>
					<div class="alert alert-danger">
				  <strong> <?=$this->session->flashdata('erro');?></strong>
				</div>
				<?php } ?>
				<h2>Cadasstro de endereço</h2><br>
				<div class="row">
					<div class="form-group col-md-8">
						<label>Endereço:</label>
						<input type="text" name="endereo" class="form-control" placeholder="Endereço" required>
					</div>
				</div>		
				<div class="row">
					<div class="form-group col-md-8">
						<label>Número:</label>
						<input type="number" name="numero" class="form-control" required>
						<!--<span ng-show="cadastroForm.userAddress.$error.email">Insira um e-mail válido</span>-->
					</div>
				</div>		
				<div class="row">
					
					<div class="form-group col-md-8">
						<label>Bairro:</label>
						<input type="text" name="bairro" class="form-control" required>
					</div>
				</div>
				<div class="row">
					<div class="form-group col-md-8">
						<label>CEP:</label>
						<input type="text" name="cep" maxlength="8" class="form-control" placeholder="CEP" required>
					</div>
				</div>

				<div class="row">
					<div class="form-group col-md-8">
						<label>Estados</label>
						<select class="form-control codigoEstado" id="codigoEstado" name="codigoEstado">
						<option value="Selecione">Selecione</option>
						<?php foreach ($estados as $e) { ?>
							<option value="<?=$e['codigoEstado'] ?>"><?=$e['nome'] ?></option>
						<?php } ?>
						</select>
					</div>
				</div>

				<div class="row">
					<div class="form-group col-md-8">
						<label>Cidades</label>
						<select disabled="" class="form-control codigoCidade" id="codigoCidade" name="codigoCidade">
						</select>
					</div>
				</div>

				

				<div class="row">
					<div class="form-group col-md-8">
						<label>Clientes</label>
						<select class="form-control" id="codigoCliente" name="codigoCliente">
						<?php foreach ($clientes as $c) { ?>
							<option value="<?=$c['codigoCliente'] ?>"><?=$c['nome'] ?></option>
						<?php } ?>
						</select>
					</div>
				</div>
			
				<button class="btn btn-success" type="submit">Cadastrar</button>
		</form>
	</main>
</div>
<script type="text/javascript" src="<?=base_url()?>assets/js/cidadeestado_ajax.js"></script>
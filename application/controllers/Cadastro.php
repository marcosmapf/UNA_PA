<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cadastro extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('template_helper');
		$this->load->model('Cliente_model', 'cliente');
		$this->load->model('Endereco_model', 'endereco');
		$this->load->model('CidadeEstado_model', 'cidest');
		
	}

	public function endereco(){
		$dados['clientes'] = $this->cliente->consulta();
		$dados['estados'] = $this->cidest->consultaEstado();
		render_template('cadastro/cadastro_endereco', $dados);
	}

	public function endereco_salvar(){
		
		$array = [
			'endereco' => $this->input->post('endereo'),
			'numero' => $this->input->post('numero'),
			'bairro' => $this->input->post('bairro'),
			'cep' => $this->input->post('cep'),
			'codigoCidade' => $this->input->post('codigoCidade'),
			'codigoCliente' => $this->input->post('codigoCliente'),

		];

		$retorno = $this->endereco->inclusao($array);


		if($retorno > 0){
			$this->session->set_flashdata('sucesso', 'Registrado salvo com sucesso');
			redirect('cadastro/endereco');
		}else{
			$this->session->set_flashdata('erro', 'Houve um problema ao salvar o registro');
			redirect('cadastro/endereco');
		}
	}

	public function cidadeestado_ajax(){
		$estado = $this->input->post('estado');

		$cidades = $this->cidest->consultaCidadePorEstado($estado);

		foreach ($cidades as $c) {
			echo "<option value='".$c['codigoCidade']."'>".$c['nome'] ."</option>";
		}
	}

 }
<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Pedido_model extends CI_Model {
        public function __contruct(){
        parent::__construct();
    }

    public function consultaPedidos($cliente){
    	$this->db->select('*');
    	$this->db->from('pedido');
    	$this->db->join('cliente', 'cliente.codigoCliente = pedido.codigoCliente');
    	$this->db->join('enderecocliente', 'enderecocliente.codigoEnderecoCliente = pedido.codigoEndereco_entrega');
    	$this->db->join('statuspedido', 'statuspedido.codigoStatusPedido = pedido.statusPedido_codigoStatusPedido');
    	$this->db->where('pedido.codigoCliente', $cliente);
    	return $this->db->get()->result_array();
    }

    public function ConsultaItemPedido($pedido){
    	$this->db->select('*');
    	$this->db->from('itempedido');
    	$this->db->join('pedido', 'pedido.codigoPedido = itempedido.codigoPedido');
    	$this->db->join('produto', 'produto.codigoProduto = itempedido.codigoProduto');
    	$this->db->where('itempedido.codigoPedido', $pedido);
    	return $this->db->get()->result_array();
    }


 }
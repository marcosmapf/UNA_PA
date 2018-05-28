<?php defined('BASEPATH') OR exit('No direct script access allowed');

class FinalizarCompra_Model extends CI_Model {
    public function __contruct(){
        parent::__construct();
    }

    public function salvarPedido($array){
    	$this->db->insert('pedido', $array);
    	return $this->db->insert_id();
    }

    public function salvarItemPedido($array){
    	$this->db->insert('itempedido', $array);
    	return $this->db->affected_rows();
    }

 }
<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Endereco_model extends CI_Model {
        public function __contruct(){
            parent::__construct();
        }

        public function inclusao($array){
        	$this->db->insert('enderecocliente', $array);
        	return $this->db->affected_rows();
        }

        public function buscaEnderecoCliente($cliente){
        	$this->db->select('codigoEnderecoCliente, endereco, numero, bairro, cep, cidade.nome as cid_nome, estado.nome as est_nome');
        	$this->db->from('enderecocliente');
        	$this->db->where('codigoCliente', $cliente);
        	$this->db->join('cidade', 'cidade.codigoCidade = enderecocliente.codigoCidade');
        	$this->db->join('estado', 'cidade.codigoEstado = estado.codigoEstado');

        	return $this->db->get()->result_array();
        }

 }
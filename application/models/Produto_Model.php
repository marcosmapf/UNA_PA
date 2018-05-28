<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Produto_Model extends CI_Model {
        public function __contruct(){
            parent::__construct();
        }

        public function getDadosProduto($idProduto){
            $this->db->where('codigoProduto', $idProduto);
            $this->db->from('produto');
            return $this->db->get()->row();
        }

        public function consultaPreco($idProduto){
        	$this->db->select('preco');
            $this->db->where('codigoProduto', $idProduto);
            $this->db->from('produto');
            return $this->db->get()->row('preco');
        }

    
   }
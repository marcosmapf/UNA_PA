<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Carrinho_Model extends CI_Model {
        public function __contruct(){
            parent::__construct();
        }

        public function getDadosProdutosCarrinho($produtos){
			$this->db->select('*');
			$this->db->from('produto'); 
			$this->db->where_in('codigoProduto', $produtos);
			$lista_dados = $this->db->get()->result();

			return $lista_dados;
        }

        public function getValorTotalCarrinho($produtos){
			$this->db->select_sum('preco');
			$this->db->from('produto'); 
			$this->db->where_in('codigoProduto', $produtos);
			$lista_dados = $this->db->get()->row();

			return $lista_dados;
        }
    
   }
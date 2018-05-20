<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Endereco_model extends CI_Model {
        public function __contruct(){
            parent::__construct();
        }

        public function inclusao($array){
        	$this->db->insert('enderecocliente', $array);
        	return $this->db->affected_rows();
        }

 }
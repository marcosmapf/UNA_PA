<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Cliente_model extends CI_Model {
    public function __contruct(){
        parent::__construct();
    }

    public function inclusao($array){
    	$this->db->insert('enderecocliente', $array);
    	return $this->db->get()->affected_rows();
    }

    public function consulta(){
    	$this->db->select('*');
    	$this->db->from('cliente');
    	return $this->db->get()->result_array();
    }


 }
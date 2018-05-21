<?php defined('BASEPATH') OR exit('No direct script access allowed');

class CidadeEstado_model extends CI_Model {
    public function __contruct(){
        parent::__construct();
    }


    public function consultaEstado(){
        $this->db->select('*');
        $this->db->from('estado');
        return $this->db->get()->result_array();
    }

    public function consultaCidadePorEstado($estado){
        $this->db->select('*');
        $this->db->from('cidade');
        $this->db->where('codigoEstado', $estado);
        return $this->db->get()->result_array();
    }


    public function consultaCidade(){
    	$this->db->select('*');
    	$this->db->from('cidade');
    	return $this->db->get()->result_array();
    }


 }
<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Carrinho extends CI_Controller
{
    function __construct() {
        parent::__construct();

        //Load user model
        //$this->load->model('user');
    }

    public function consultar(){
    	$data['carrinho'] = $this->session->userdata("carrinho");
    	
    	$this->load->view("carrinho/carrinho", $data);

    }
}

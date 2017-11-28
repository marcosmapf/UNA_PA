<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Produto extends CI_Controller
{
    function __construct() {
        parent::__construct();

        //Load user model
        //$this->load->model('user');
    }

    public function adicionarCarrinho($idProduto){
    	//$this->session->unset_userdata("carrinho");
    	//exit();
    	
    	$carrinho = $this->session->userdata("carrinho");
    	if(!empty($carrinho)){
    		$produto = array("id" => $idProduto, "qtd" => 1);
    		array_push($carrinho, $produto);
    	}else{
    		$carrinho = array(array("id" => $idProduto, "qtd" => 1));
    	}
    	
    	$this->session->set_userdata("carrinho", $carrinho);
    	print_r($this->session->userdata("carrinho"));

    }
}

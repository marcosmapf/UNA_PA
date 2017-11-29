<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Carrinho extends CI_Controller
{
    function __construct() {
        parent::__construct();

        $this->load->model("carrinho_model", "carrinho");
    }

    public function consultar(){
    	//$data['carrinho'] = $this->session->userdata("carrinho");

        $carrinho = $this->session->userdata("carrinho");
        $produtos = array();
        foreach($carrinho as $produto){
            array_push($produtos, $produto["id"]);
        }

        $lista_produtos = $this->carrinho->getDadosProdutosCarrinho($produtos);

        $data["produtos"] = $lista_produtos;
        $data["valorTotal"] = $this->carrinho->getValorTotalCarrinho($produtos);

    	$this->load->view("carrinho/carrinho", $data);

    }
}

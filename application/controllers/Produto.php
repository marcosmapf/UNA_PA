<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Produto extends CI_Controller
{
    function __construct() {
        parent::__construct();

        $this->load->model('produto_model', 'produto');
    }

    public function adicionarCarrinho($idProduto){  	
    	$carrinho = $this->session->userdata("carrinho");
    	if(!empty($carrinho)){
    		$produto = array("id" => $idProduto, "qtd" => 1);
    		array_push($carrinho, $produto);
    	}else{
    		$carrinho = array(array("id" => $idProduto, "qtd" => 1));
    	}
    	
    	$this->session->set_userdata("carrinho", $carrinho);

        $this->load->model("carrinho_model", "carrinho");
    	
        $produtos = array();
        foreach($carrinho as $produto){
            array_push($produtos, $produto["id"]);
        }

        $lista_produtos = $this->carrinho->getDadosProdutosCarrinho($produtos);

        $data["produtos"] = $lista_produtos;
        $data["valorTotal"] = $this->carrinho->getValorTotalCarrinho($produtos);

        $this->load->view("carrinho/carrinho", $data);

    }

    public function visualizar($idProduto){
        $produto = $this->produto->getDadosProduto($idProduto);

        $data['produto'] = $produto;

        $this->load->view("produto/produto", $data);        
    }
}

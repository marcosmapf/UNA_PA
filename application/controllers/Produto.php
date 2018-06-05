<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Produto extends CI_Controller
{
    function __construct() {
        parent::__construct();

        $this->load->model('produto_Model', 'produto');
        $this->load->helper('template_helper');
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

        $this->load->model("carrinho_Model", "carrinho");
    	
        $produtos = array();
        foreach($carrinho as $produto){
            array_push($produtos, $produto["id"]);
        }

        $lista_produtos = $this->carrinho->getDadosProdutosCarrinho($produtos);

        $data["produtos"] = $lista_produtos;
        $data["valorTotal"] = $this->carrinho->getValorTotalCarrinho($produtos);

       redirect("carrinho", $data);

    }

    public function visualizar($idProduto){
        $produto = $this->produto->getDadosProduto($idProduto);

        $data['produto'] = $produto;

        $this->load->view("produto/produto", $data);        
    }


    public function pedidos(){
        $this->load->helper('sessao_helper');
        verificaSessao();

        $this->load->model('pedido_model', 'pedido');
        $cliente = $this->session->userdata('logado')['id'];

        $pedidos = $this->pedido->consultaPedidos($cliente);

        for ($i=0; $i < count($pedidos); $i++) { 
            $itenspedido = $this->pedido->ConsultaItemPedido($pedidos[$i]['codigoPedido']);

            if($itenspedido){
                array_push($pedidos[$i], array('produtos' => $itenspedido));
            }
        }
        //$pedidos[3][0]['produtos'][0];

        $dados['pedidos'] = $pedidos;
       

        render_template('pedido/pedido', $dados);
    }
}

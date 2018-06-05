<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Carrinho extends CI_Controller
{
    function __construct() {
        parent::__construct();

        $this->load->model("carrinho_Model", "carrinho");
        $this->load->helper('template_helper');
    }

    public function consultar(){
    	//$data['carrinho'] = $this->session->userdata("carrinho");

        $carrinho = $this->session->userdata("carrinho");

       
        $produtos = array();
        if($carrinho){
            foreach($carrinho as $produto){
                array_push($produtos, $produto["id"]);
            }

            $lista_produtos = $this->carrinho->getDadosProdutosCarrinho($produtos);

            $data['vazio'] = 'cheio';
            $data["produtos"] = $lista_produtos;
            $data["valorTotal"] = $this->carrinho->getValorTotalCarrinho($produtos);

            render_template("carrinho/carrinho", $data);
        }else{
            $data['vazio'] = 'vazio';
            render_template("carrinho/carrinho", $data);
        }
        

    }

    public function retirarCarrinho($produto){
       
        $carrinho = $this->session->userdata('carrinho');

        $inicial = [];
        foreach ($carrinho as $key => $value) {
           $inicial[] = $key;
        }
        
        for ($i=$inicial[0]; $i < count($carrinho) ; $i++){ 

            if($carrinho[$i]['id'] === $produto){
                unset($carrinho[$i]);
            }
        }

        $carrinho2 = array_values($carrinho);


    $this->session->set_userdata('carrinho', $carrinho2);
    redirect('carrinho');
}


    public function calcular_frete(){
        $this->load->helper('calcula_frete_helper');
        $cep = $this->input->post('cep');

        $resultado = calculaFrete( 
        '41106', 
        '11680000', 
        $cep, 
        '1', 
        '15', '22', '32', 0 );

        $this->output
        ->set_content_type('application/json')
        ->set_output(json_encode($resultado));
    }


    public function finalizar_compra($id_unico){
        $carrinho = $this->session->userdata("carrinho");

        $produtos = array();
        foreach($carrinho as $produto){
            array_push($produtos, $produto["id"]);
        }

        $lista_produtos = $this->carrinho->getDadosProdutosCarrinho($produtos);

        $data['vazio'] = 'cheio';
        $data["produtos"] = $lista_produtos;
        $data["valorTotal"] = $this->carrinho->getValorTotalCarrinho($produtos);
        $data['id_unico'] = $id_unico;

        render_template('carrinho/finalizar_compra', $data);
    }


    public function pedido_finalizado($id_unico, $endereco, $cliente){
        $this->load->model('FinalizarCompra_Model', 'finalizar');
        $this->load->model('Produto_Model', 'produto');
        $data = date('Y-m-d');

        $array_finalizar = [
            'codigoCliente' =>$cliente,
            'data_hora' => date('Y-m-d'),
            'codigoEndereco_entrega' =>$endereco,
            'enderecoCliente_notafiscal' =>$endereco,
            'statusPedido_codigoStatusPedido' =>1
        ];

       $retorno_id = $this->finalizar->salvarPedido($array_finalizar);

        $carrinho = $this->session->userdata("carrinho");

        $produtos = array();
        foreach($carrinho as $produto){
            array_push($produtos, $produto["id"]);
        }

        foreach ($produtos as $produto) {

            $preco = $this->produto->consultaPreco($produto);

            $arr_itempedido = [
                'codigoProduto'=> $produto,
                'codigoPedido' => $retorno_id,
                'preco_compra' => $preco,
                'quantidade' => 1
            ];

            $retorno = $this->finalizar->salvarItemPedido($arr_itempedido);
        }

        $this->session->unset_userdata('carrinho');

        redirect('pedidos');
    }


}

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

}

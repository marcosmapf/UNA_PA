<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
		parent::__construct();
    $this->load->library('facebook');
      $this->facebook->enable_debug(TRUE);
		
	}

	public function login(){
    // We can use the open graph place meta data in the head.
    // This meta data will be used to create a facebook page automatically
    // when we 'like' the page.
    // 
    // For more details see: http://developers.facebook.com/docs/opengraph
    
    $opengraph =  array(
              'type'        => 'website',
              'title'       => 'My Awesome Site',
              'url'       => site_url(),
              'image'       => '',
              'description'   => 'The best site in the whole world'
            );

     $this->load->vars('opengraph', $opengraph);
		$this->load->view('login/login');
	}

	public function login_entrar(){
    $this->load->model('Endereco_model', 'endereco');
		$email = $this->input->post('enderecoEmail');
    $senha = $this->input->post('senhaUsuario');


    $this->load->model('User', 'user');
    $existecontato = $this->user->existeUser($email, $senha);


     // $dados = 0 =>  login não existe
    if($existecontato){

        $usuario = [
          'id' => $existecontato[0]->codigoCliente,
          'cpf' => $existecontato[0]->cpf,
          'nome' => $existecontato[0]->nome,
          'email' => $existecontato[0]->email
        ];

        $endereco = $this->endereco->buscaEnderecoCliente($existecontato[0]->codigoCliente);


        //$this->apagar_token($dados[0]->usu_login);
        $this->session->set_userdata('logado', $usuario);
        $this->session->set_userdata('endereco', $endereco[0]);

        redirect('main/index');
      
    }else{
      $this->session->set_flashdata('msg', 'Login/Senha inválido.');
      redirect('user_authentication/index');
        
	}

 }

	public function logout(){
    	$this->session->unset_userdata('logado');
    	$this->session->unset_userdata('carrinho');
      $this->facebook->logout();
    	redirect('user_authentication/index');
	}

 }
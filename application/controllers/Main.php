<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('template_helper');
		$this->load->helper('sessao_helper');
		
	}

	
	public function index(){
		render_template('main/main');
	}

	public function contato(){
		$this->load->view('contato/contato');
	}

	public function about(){
		render_template('about/about');
	}

}

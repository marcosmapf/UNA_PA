<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	
	public function index()
	{
		$this->load->view('main/main');
	}

	public function contato()
	{
		$this->load->view('contato/contato');
	}

	public function about()
	{
		$this->load->view('about/about');
	}

}

<?php


function render_template($caminho, $dados = []){
		$CI =& get_instance();
		$CI->load->view('template/header');
		$CI->load->view($caminho, $dados);
		$CI->load->view('template/footer');
	}
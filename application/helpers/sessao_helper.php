<?php
	
	function verificaSessao(){
		$CI =& get_instance();
		$sessao = $CI->session->userdata('logado');

		if(!$sessao){
			redirect('user_authentication/index');
		}
	}
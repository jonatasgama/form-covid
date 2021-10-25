<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

	if(!function_exists('verificaSessao')){
		function verificaSessao(){
			$CI =& get_instance();
			$user = $CI->session->userdata('nome');
				if (!isset($user)){ 
					return false; 
				} 
				else{ 
					return true;
				}

		}
	}
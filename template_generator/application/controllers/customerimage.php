<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Customerimage extends CI_Controller {

	public function index(){
				$this->load->helper('url');
		if(!$this->session->userdata('fullname')){
			$this->load->view('login');
			}
	else{
	$this->load->view('customimage');
	}
	}
}
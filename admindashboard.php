<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admindashboard extends CI_Controller {

	public function index(){
		$this->load->view("login");
	}
	public function login(){
		$this->db->from('admin_user');
		$this->db->where('username',$_POST['username']);
		$this->db->where('password',$_POST['password']);
		$query = $this->db->get();
		foreach ($query->result() as $key) {
		if($query->num_rows() != 0 && $_SERVER['HTTP_REFERER']=='http://localhost/casekart/template_generator/index.php/' ){
		$this->session($key->id,$key->username);
		echo json_encode(array('status'=>true, 'redirect'=>'http://localhost/casekart/template_generator/index.php/customerorder'));
		     }
		     else{
				$this->session($key->id,$key->username);
		     	$this->load->library('user_agent');
				$this->agent->referrer();
				redirect($_SERVER['HTTP_REFERER'],'refresh');
		     	echo json_encode(array('status'=>true, 'redirect'=>$_SERVER['HTTP_REFERER'],'refresh'));
		     	// echo $_SERVER['HTTP_REFERER'];
		     	// echo json_encode("failure");
		     }
	}
}
	public function admin(){
		$this->load->view("index1");
	}
	public function session($id,$name){
		$fullname = array(
			'userid'=> $id,	
			'fullname' => $name,
			);
		$this->session->set_userdata($fullname);
	}
	
	

}
	
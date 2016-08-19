<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* To select the models
*/
class Select_models extends CI_Controller
{
	public function index(){
		if ($this->session->userdata('username')) {
			$this->load->view('select_models');
		}else if(isset($_POST['username'])){
		$query = $this->db->get_where('customer_login_details',array('user_name'=>$_POST['username'],'password'=>$_POST['password']));
		if ($query->num_rows() > 0) {
			$data = $query->result();
			foreach ($data as $key => $value) {
			$userdata = array(
				'username' => $value->user_name,
				'userid' => $value->customer_id,
				);
			$this->session->set_userdata($userdata);
				
			}
			$this->load->view('select_models');
		}else{
			$this->load->view('login');
		}			
		}else{
			$this->load->view('login');
		}
		
	}
	public function login()
	{
		$query = $this->db->get_where('customer_login_details',array('user_name'=>$_POST['username'],'password'=>$_POST['password']));
		if ($query->num_rows() > 0) {
			$data = $query->result();
			foreach ($data as $key => $value) {
			$userdata = array(
				'username' => $value->user_name,
				'userid' => $value->customer_id,
				);
			$this->session->set_userdata($userdata);
				
			}
			redirect('select_models');
		}else{
			$this->index();
		}
	}
	public function include_page(){
		$this->load->view('models');
	}
	public function select_brands(){
	$this->db->select('b.brand_name, GROUP_CONCAT(m.model_name) as model_name, GROUP_CONCAT(m.price) as price, GROUP_CONCAT(m.model_id) as model_id'); 
    $this->db->from('brands b');
    $this->db->join('models m', 'm.brand_id = b.brand_id', 'JOIN');
    $this->db->group_by('b.brand_name');
    $query = $this->db->get()->result(); 
	echo json_encode($query);
	}
}
<?php
class dropdwn_view extends CI_Controller
{
	function construct()
	{
		parent::__construct();
	}
	public function select_option()
	{
		$query=$this->db->get('brands');
		return $query->result();
	}
}


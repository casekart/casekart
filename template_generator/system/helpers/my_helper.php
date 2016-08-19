<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	function is_logged_in() {
      $user = $this->session->userdata('user_data');
      if (!isset($user)) { 
       return false; 
      } 
     else { 
       return true;
     }
    } 
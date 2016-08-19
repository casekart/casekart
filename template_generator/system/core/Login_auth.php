<?php
class Login_auth extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        if ( ! $this->session->userdata('fullname'))
        { 
            redirect('login');
        }
    }
}
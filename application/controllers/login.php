<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {

	public function index()
	{
		$this->form_validation->set_rules('username','username','required');
		$this->form_validation->set_rules('password','password','required');

       if ($this->form_validation->run() == TRUE) {
             $username=$this->input->post('username');
             $password=$this->input->post('password');
               $this->user_login->login($username,$password);
       }

		$data = array('title' => 'login');
		$this->load->view('v_login',$data, FALSE);
	}


	public function logout()
	{
		 $this->user_login->logout();
	}
}